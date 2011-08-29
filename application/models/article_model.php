<?php

class Article_Model extends CI_Model
{

	private $readability;

	function __construct()
	{
		parent::__construct();
		$this->load->library("CIReadability");  
	}

	function extractArticle($options = array())
	{
		// required values
		if(!$this->_required(array('url'),$options)) {
			return false;
	    } else {
	    	$url = urldecode($options['url']);
	    	if (!$contents = file_get_contents($url)) {
	    		return false;
	    	}
	    	$html = mb_convert_encoding($contents, "UTF-8");
	    	if (function_exists('tidy_parse_string')) {
				$tidy = tidy_parse_string($html, array(), 'UTF8');
				$tidy->cleanRepair();
				$html = $tidy->value;
			}
			$this->readability = new Readability($html, $url);
			$result = $this->readability->init();
			if ($result) {
					$content = "<h1>".$this->readability->getTitle()->textContent."</h1>";
					$content .= $this->readability->getContent()->innerHTML;
					// if we've got Tidy, let's clean it up for output
					if (function_exists('tidy_parse_string')) {
						$tidy = tidy_parse_string($content, array('indent'=>true, 'show-body-only'=>true),'UTF8');
						$tidy->cleanRepair();
						$content = $tidy->value;
					}
					return $content;
			} else {
				return false;
			}			
	    }	    
	}

function trimArticle ($strText, $intLength, $strTrail) {
    $wsCount = 0;
    $intTempSize = 0;
    $intTotalLen = 0;
    $intLength = $intLength - strlen($strTrail);
    $strTemp = "";

    if (strlen($strText) > $intLength) {
        $arrTemp = explode(" ", $strText);
        foreach ($arrTemp as $x) {
            if (strlen($strTemp) <= $intLength) $strTemp .= " " . $x;
        }
        $CropSentence = $strTemp . $strTrail;
    } else {
        $CropSentence = $strText;
    }

    return $CropSentence;
}


	
	function storeArticle($options = array()) {
		// required values
		if(!$this->_required(array('content', 'engine'),$options)) {
			return false;
	    } else {
	    	$text = $options['content'];
				$url = 'http://api.zemanta.com/services/rest/0.0/';
				$format = 'json';
				$key = "yaoelglvqfvpjfp72ogwwe9b";
				$method = "zemanta.suggest";
				$args = array(
				'method'=> $method,
				'api_key'=> $key,
				'text'=> $text,
				'format'=> $format
				);
				$data = "";
				foreach($args as $key=>$value)
				{
					$data .= ($data != "")?"&":"";
					$data .= urlencode($key)."=".urlencode($value);
				}
				$params = array('http' => array(
				'method' => 'POST',
				'Content-type'=> 'application/x-www-form-urlencoded',
				'Content-length' =>strlen( $data ),
				'content' => $data
				));	
				$ctx = stream_context_create($params); // We build the POST context of the request
				$fp = @fopen($url, 'rb', false, $ctx); // We open a stream and send the request
				if ($fp)
				{
				/* Finaly, herewe get the response of Zementa */
				$response = @stream_get_contents($fp);
				if ($response === false)
				{
					$response = "Problem reading data from ".$url.", ".$php_errormsg;
				}
				fclose($fp); // We close the stream
				}
				else
				{
					$response = "Problem reading data from ".$url.", ".$php_errormsg;
				}
				$decoded = json_decode($response);
				//echo print_r($decoded, true);
				foreach ($decoded->keywords as $keyword) {
					echo $keyword->name."<br />";
				}			
	    }
	}	
	
	function getRelatedArticles($options = array()) {
		// required values
		if(!$this->_required(array('content', 'engine'),$options)) {
			return false;
	    } else {
	    	$text = $options['content'];
	    	if ($options['engine'] == 'zemanta') {
				$url = 'http://api.zemanta.com/services/rest/0.0/';
				$format = 'json';
				$key = "yaoelglvqfvpjfp72ogwwe9b";
				$method = "zemanta.suggest";
				$args = array(
				'method'=> $method,
				'api_key'=> $key,
				'text'=> $text,
				'format'=> $format
				);
				$data = "";
				foreach($args as $key=>$value)
				{
					$data .= ($data != "")?"&":"";
					$data .= urlencode($key)."=".urlencode($value);
				}
				$params = array('http' => array(
				'method' => 'POST',
				'Content-type'=> 'application/x-www-form-urlencoded',
				'Content-length' =>strlen( $data ),
				'content' => $data
				));	
				$ctx = stream_context_create($params); // We build the POST context of the request
				$fp = @fopen($url, 'rb', false, $ctx); // We open a stream and send the request
				if ($fp)
				{
				/* Finaly, herewe get the response of Zementa */
				$response = @stream_get_contents($fp);
				if ($response === false)
				{
					$response = "Problem reading data from ".$url.", ".$php_errormsg;
				}
				fclose($fp); // We close the stream
				}
				else
				{
					$response = "Problem reading data from ".$url.", ".$php_errormsg;
				}
				$decoded = json_decode($response);
				//echo print_r($decoded, true);
				foreach ($decoded->articles as $article) {
					echo "<a href=\"".$article->url."\" target=\"_blank\">".$article->title."</a><br />";
				}
			} elseif ($options['engine'] == 'daylife')  {
				$accesskey = '7128e4e05a0446bd2ddc08d92330fceb';
				$sharedsecret = '3d5c97132a59f2217c2a35d8d643aa43';
			#configure the daylife api server url here 
			$daylife_server = "freeapi.daylife.com"; 
			$protocol = "jsonrest"; 
			$version = "4.10"; 
			$publicapi_access_url = "http://" . $daylife_server . "/" . $protocol . "/publicapi/" . $version . "/"; 
			//$now_s = time(); 
 
			#get handle to public api 
			$this->load->library("Daylife");
			$publicapi = new PublicApi($publicapi_access_url, $accesskey, $sharedsecret); 
 			
			#build params for article search 
			$params = array();
			
			$params['content'] = $text; 
			//$params['signature'] = "test";
			//$params['accesskey'] = $accesskey;
			$params['sort'] = 'relevance'; 
			$params['offset'] = 0; 
			$params['limit'] = 10; 
			//$params['end_time'] = $now_s; 
			#news in last 1 week 
			$params['start_time'] = $options['start']; 
			$results = $publicapi->content_getRelatedArticles($params);
			//echo print_r($results, true);
			$data = array();
			$data['related'] = $results['response']['payload'];
			return $data;
			
			}
		
		
			
			
			$calaiskey = 'c8u6dc8ukdc8unb9ruc6jf3x';
			
	    }
	}

	/** Utility Methods **/
	function _required($required, $data)
	{
		foreach($required as $field)
			if(!isset($data[$field])) return false;
			
		return true;
	}
	
}