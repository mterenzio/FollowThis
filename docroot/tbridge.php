<?php
require_once '/var/www/listalertz/includes/config.php';
require_once '/var/www/listalertz/classes/epicenter/EpiCurl.php';
require_once '/var/www/listalertz/classes/epicenter/EpiOAuth.php';
require_once '/var/www/listalertz/classes/epicenter/EpiTwitter.php';
require_once '/var/www/listalertz/classes/Alert.php';
require_once '/var/www/listalertz/classes/TimeHelper.php';
require_once '/var/www/listalertz/classes/cloudfusion/cloudfusion.class.php';
$sdb = new AmazonSDB();
$twitterObj = new EpiTwitter(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET);   

$onehourago = time() - 60;
$select = $sdb->select("select * from ".SDB_ALERT_TABLE." where lastupdated < \"$onehourago\" and verified = \"true\" and active = \"true\" and frequency = \"hourly\" limit 2500");
$results = convertSelectToArray($select);
foreach($results as $result) { 
    $userid = $result['user'];
    $secret = md5($result['email']);
    $userselect = $sdb->select("select * from ".SDB_USER_TABLE." where id = '$userid'");
    $userresults = convertSelectToArray($userselect);
    try {
        $twitterObj->setToken($userresults[0]['oauthtoken'], $userresults[0]['oauthsecret']);
        $twitterInfo = $twitterObj->get_accountVerify_credentials();
        $twitterInfo->response;
        echo "Now logged in as ".$twitterInfo->name;
    }catch(EpiTwitterServiceUnavailableException $e){
        echo 'Twitter is unavaiable. That stinks but there is nothing we can do.';
        continue;
    }catch(Exception $e){
        echo "Something unknown is wrong with our connection with twitter. Please try back later.";
        continue;
    }
    //grab the tweets from this alert's list
    $listtokens = explode('/', $result['list']);
    $user = substr($listtokens[0], 1);
    $list = $listtokens[1];
    $statusmethod = "get_".strtolower($user)."Lists".ucfirst(strtolower($list))."Statuses";
    $matchedtweets = array();
    $matched = false;
    $nummatched = 0;
    $itemshtml = "";
    unset($laststatus);
    for ($x = 1; $x < 10 ; $x++) {
    	if (isset($result['laststatus'])) {
        	//echo $result['laststatus'];
    		$firstupdate = false;
        	$since_id = $result['laststatus'];//23244650420;//
    		$tweets = $twitterObj->$statusmethod(array('since_id' => $since_id, 'per_page' => 200, 'page'=>$x));
    		$tweets->response;
    		if (count($tweets) == 0) {
    			break;
        	}
    	} else {
        	//echo "no since page";
        	$firstupdate = true;
    		$tweets = $twitterObj->$statusmethod(array('per_page' => 200, 'page'=>$x));
    		$tweets->response;
    		if (count($tweets) == 0) {
    			break;
        	}
    	}
        //echo count($tweets)." total";

        foreach ($tweets as $status) {
                 	echo $status->id."\n\r";
        	if (!isset($laststatus)) {         
          		$laststatus = $status->id;
          	}

            if (is_array($result['keywords'])) {
           		foreach ($result['keywords'] as $keyword) {
                	$word = (string)$keyword;
                    if (!preg_match("/\b($word)\b/i", $status->text)) {                  
                    	if ($result['matchtype'] == 'all') {
                        	$matched = false;
                            break;
                      	} else {
                        	continue;
                      	}                     
                    } else {
                    	$matched = true;
                    	$nummatched++;
                        if ($result['matchtype'] == 'one') {
                        	break;
                        } else {
                          continue;
                        }
                   }
                }
            } else {
                  //echo $result['keywords'];
                  $word = $result['keywords'];
                  if (!preg_match("/\b($word)\b/i", $status->text)) {
                      $matched = false;
                  }  else {
                      $matched = true;
                      $nummatched++;
                  }
             }
            if ($matched == true) {
         		$matchedtweets[] = array('statustext' => $status->text, 'profileimage' => $status->user->profile_image_url, 'screenname' => $status->user->screen_name, 'time' => $status->created_at);
            }
          $matched = false;        
      }
}
     if ($nummatched > 0) {
         foreach ($matchedtweets as $tweet) {

            if (is_array($result['keywords'])) {
        	     $words = $result['keywords'];        	     
        	} else {
        	     $words = array($result['keywords']);         
        	}

         	$linkedtext = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]","<a href=\"\\0\">\\0</a>", $tweet['statustext']);
         	$atpattern = "/@([\w]+)/i";
         	$text = preg_replace($atpattern, '@<a href="http://www.twitter.com/\1">\1</a>', $linkedtext);
            $text =  highlightWords($text, $words);
            $tweettimestamp = strtotime($tweet['time']);
            $timesince = TimeHelper::timesincetimestamp($tweettimestamp);
            $date = date("F j, Y, g:i a",$tweettimestamp);
         	$itemshtml .= "<div style=\"min-height:68px; min-width: 500px; padding: 10px 0px 10px 0px; margin-bottom: 5px; clear:both; border-width: 1px; border-style:solid; border-left-color: #fff; border-right-color:#fff;  border-bottom-color: #efefef; border-top-color:#fff;\"><img src=\"".$tweet['profileimage']."\" height=\"48\" width=\"48\" style=\"border: 0; float: left; padding: 10px 10px 10px 10px;\"/><div style=\"margin-left:10px; padding: 10px; text-align: left; font-size : 85%; color: #000;\"><a href=\"http://twitter.com/".$tweet['screenname']."\">".$tweet['screenname']."</a>: ".$text."</div><div style=\"margin-left:80px; padding: 5px; text-align: left; font-size : 75%; color: #008000;\">".$date." (".$timesince.")</div><div style=\"margin:0; padding: 5px; text-align: left; font-size : 80%; color: #606061; font-weight:bold;\"><a href=\"http://twitter.com/home?status=@".$tweet['screenname']."\">[reply]</a> | <a href=\"http://twitter.com/home?status=RT+@".$tweet['screenname']."+".urlencode($tweet['statustext'])."\">[retweet]</a></div></div>";         
         }     
         //at last one match so send an email
         //echo $nummatched." matched";
         $keystring = "";
         $count=1;
         foreach ($words as $word) {
            if ($count < count($words)) {
               if ($result['matchtype'] == 'all') {  
         	    	$keystring .= $word." and ";
         	   } elseif ($result['matchtype'] == 'one') {
         	    	$keystring .= $word." or ";         	   
         	   }
         	 } else {
         	     $keystring .= $word;
         	 }
         	 $count++;
         }
         if ($nummatched > 1) {
         	$plural = "s";
         } else {
         	$plural = "";
         }
         $subject = $nummatched. " new tweet".$plural." from ".$result['list']." with \"".$keystring."\"";
         $emailhtml = "<!doctype html><html><head><title></title><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/></head><body >"; 
         //$emailhtml .= "<style>.navheader {text-align:center; font-weight: bold;}";
         //$emailhtml .= ".item{min-height:68px; min-width: 500px; padding: 10px 0px 10px 0px; margin-bottom: 5px; clear:both; border-width: 1px; border-style:solid; border-left-color: #fff; border-right-color:#fff;  border-bottom-color: #efefef; border-top-color:#fff; }";
         //$emailhtml .= ".title{ margin:0; padding: 0px; text-align: left; font-size : 95%;}";
         //$emailhtml .= ".description{ margin-left:10px; padding: 10px; text-align: left; font-size : 85%; color: #000;}";
         //$emailhtml .= ".itemheader{ margin:0; padding: 5px; text-align: left; font-size : 80%; color: #606061;}";
         //$emailhtml .= ".itemfooter{ margin-left:80px; padding: 5px; text-align: left; font-size : 75%; color: #008000}";
         //$emailhtml .= ".items{font-family : verdana, sans-serif;  margin-left: 10px;margin-right: auto; padding: 10px 10px 10px 0px; max-width: 500px;}";
         //$emailhtml .= ".highlight{background: #CEDAEB;}";
         //$emailhtml .= ".itemsubfooter{ margin:0; padding: 5px; text-align: left; font-size : 80%; color: #606061; font-weight:bold}";        
         //$emailhtml .= "img.profile {border: 0; float: left; padding: 10px 10px 10px 10px;}</style>" ;
         $emailhtml .= "<div><b>Twitter List: <a href=\"http://twitter.com/".$user."/".$list."\">".$result['list']."</a></b></div>";
         $emailhtml .= "<div><b>Keywords: ".$keystring."</b></div>";
         $emailhtml .= "<div><b>New Tweets: ".$nummatched."</b></div><br />";
         $emailhtml .= "<div style=\"font-family : verdana, sans-serif;  margin-left: 10px;margin-right: auto; padding: 10px 10px 10px 0px; max-width: 500px;\">".$itemshtml."</div>";
         $emailhtml .= "<hr style=\"width: 100%; height: 1px; border: 0px solid #000;\">";
         $emailhtml .= "<div>This alert was been created at <a href=\"http://listalertz.com\">http://listalertz.com</a>.</div>";
         $emailhtml .= "<div>To remove this alert, <a href=\"http://listalertz.com/deactivate/".$result['token']."/".$secret."\">click here</a>.</div>";         
         $emailhtml .= "</body></html>";
         $to = $result['email'];
         //echo $emailhtml;
            $headers = 'From: ListAlertz <support@listalertz.com>' . "\r\n" .
            'Reply-To: support@listalertz.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion()."\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html\r\n";
            //echo "sending mail to ".$to;
         $mail = mail($to, $subject, $emailhtml, $headers);
         //echo $mail;
     }
     $alert = new Alert();
     $alert->updateAlert($result['id'], $laststatus); 
     echo "\n\rlast: ".$laststatus;
}

 function highlightWords($string, $words)
 {
    foreach ( $words as $word )
    {
        $string = preg_replace("/\b($word)\b/i", '<b>$1</b>', $string);        
    }
    /*** return the highlighted string ***/
    return $string;
 }

    function convertSelectToArray($select) {
        $results = array();
        $x = 0;
        foreach($select->body->SelectResult->Item as $result) {
            foreach ($result as $field) {
                //echo $results[$x][ (string) $field->Name ];
                if (isset($results[$x][ (string) $field->Name ])) {
                    //echo (string) $field->Name.' set already';
                    if (!is_array($results[$x][ (string) $field->Name ])) {
                        $existingvalue = $results[$x][ (string) $field->Name ];
                        $results[$x][ (string) $field->Name ] = array();
                        $results[$x][ (string) $field->Name ][] = $existingvalue;
                    }
                    $results[$x][ (string) $field->Name ][] = (string) $field->Value;
                } else {
                $results[$x][ (string) $field->Name ] = (string) $field->Value;
                }
            }
            $x++;
        }
        //echo print_r($results, true);
        return $results;
    }