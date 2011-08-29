<?php

/**
 * FollowThis_Model
 * 
 * @package FollowThis
 */

class FollowThis_Model extends CI_Model
{
	
	/** Utility Methods **/
	function _required($required, $data)
	{
		foreach($required as $field)
			if(!isset($data[$field])) return false;
			
		return true;
	}
	
	function createSub($options = array())
	{		
				// required values
		if(!$this->_required(
			array('email', 'url'),
			$options)
		) return false;		 
		$timestamp = time();
		//echo $options['email'];
        	$parts = explode("@", $options['email']);
        	//echo print_r($parts, true);
        	$host = strtolower($parts[1]);
        	$local = strtolower($parts[0]);
        	$normalemail = $local."@".$host;
        	$options['email'] = $normalemail;
		$options['token'] = md5($timestamp.$options['email']);
		$token = $options['token'];
        $secret = md5($normalemail);
		if (!$this->subExists($options['email'], $options['url'])) {
			if ($this->db->insert('followthis', $options)) {

			$to = $normalemail;
           $headers = 'From: FollowThis <support@followth.is>' . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html\r\n";
            $return = "-f ".$token."-bounce@followth.is";
            $subject = "Activate your FollowThis alert";
            $emailhtml = "Hi,<br /><br />Your FollowThis news alert has been successfully created.
					In order to activate it, click on the following link or copy/paste it into your browser:<br /><br />If you did not make such a request, please ignore this email.<br /><br />http://followth.is/alert/verify/$token/$secret";

         $mail = mail($to, $subject, $emailhtml, $headers, $return);
            	return true;
            } else {
            	return false;
            }
        } else {
            return false;
        } 
	}

	function sendAlert($data)
	{		
		// required values
		if(!$this->_required(
			array('email'),
			$data)
		) return false;
			$itemshtml = "";
			foreach ($data['related']['article'] as $result) {
            //$link = "http://localertz.com/go/url/".$result['token']."/".urlsafe_b64encode($match['link']);
            $posttimestamp = strtotime($result['timestamp']);
            $this->load->library("CITimeHelper");
            $timesince = TimeHelper::timesincetimestamp($posttimestamp);
            $date = date("F j, Y, g:i a",$posttimestamp);
            $text = $result['excerpt'];
            $title = $result['headline'];
            $link = $result['url'];
            $pub = $result['source']['name'];
            $publink = $result['source']['url'];
         	$itemshtml .= "<div style=\"min-height:68px; min-width: 500px; padding: 10px 0px 10px 0px; margin-bottom: 5px; clear:both; border-width: 1px; border-style:solid; border-left-color: #fff; border-right-color:#fff;  border-bottom-color: #efefef; border-top-color:#fff;\"><div><a href=\"".$link."\">".$title."</a></div><div style=\"margin-left:10px; padding: 10px; text-align: left; font-size : 85%; color: #000;\">".$text." <a href=\"".$link."\">read more</a></div><div style=\"text-align: left; font-size : 75%; color: #008000;\">".$date." (".$timesince.") from <a href=\"".$publink."\">".$pub."</a></div></div>";         
         	}


		$secret = md5($data['email']);
		
         $emailhtml = "<!doctype html><html><head><title></title><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/></head><body >";
         $emailhtml .= "<style>@media print{#_t { background-image: url('https://campaigncog.com/trk.php?i=MTA5NA==&t=p&s=');}}div.OutlookMessageHeader, table.moz-email-headers-table, blockquote #_t {background-image:url('https://campaigncog.com/trk.php?i=MTA5NA==&t=f&s=')}</style><div id=\"_t\"></div><img src=\"https://campaigncog.com/trk.php?i=MTA5NA==&s=\" style=\"display:none\" width=\"1\" height=\"2\" border=\"0\" />";
         //$emailhtml .= "<div><b>Location: ".$result['radius']." ".$result['radiustype']." around ".$placename."</b></div>";
         //$emailhtml .= "<div><b>Keywords: ".$keystring."</b></div>";
         //$emailhtml .= "<div><b>New items: ".$nummatched."</b></div><br />";
         $emailhtml .= "<div style=\"font-family : verdana, sans-serif;  margin-left: 10px;margin-right: auto; padding: 10px 10px 10px 0px; max-width: 500px;\">".$itemshtml."</div>";
         $emailhtml .= "<hr style=\"width: 100%; height: 1px; border: 0px solid #000;\">";
         $emailhtml .= "<div>This alert was been created at <a href=\"http://followth.is\">http://followth.is</a>.</div>";
         $emailhtml .= "<div>To remove this alert, <a href=\"http://followth.is/alert/deactivate/".$data['token']."/".$secret."\">click here</a>.</div>";         
         $emailhtml .= "</body></html>";
         $to = $data['email'];
            $headers = 'From: FollowThis <support@followth.is>' . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html\r\n";
            $return = "-f ".$data['token']."-bounce@followth.is";
            $subject = "FollowThis found some related items . . .";
         $mail = mail($to, $subject, $emailhtml, $headers, $return);


		
		return true;
	}

	function hasEmail() {
		if ($this->session->userdata('email')) {
			return true;
		} else {
			return false;
		}
	}

	function getEmail() {
		if ($this->session->userdata('email')) {
		//echo $this->session->userdata('email');
			return $this->session->userdata('email');
		} else {
			return false;
		}
	}
	
	function storeEmail($email)
	{
		$this->session->set_userdata('email', $email);		
		return true;
	}

	function clearEmail()
	{
		$this->session->unset_userdata('email');		
		return true;
	}

	function verifySub($token, $secret) {
        if (!$id = $this->getSubIDFromToken($token)) {
        	if ($this->getSecretFromToken($token) != $secret) {
                return false;
            }
        }
        //echo $id;
        $this->db->set('status', 'active');
		$this->db->where('id', $id);
        $this->db->update('followthis');		
		return $this->db->affected_rows();
	}

	function updateSub($token) {
        $this->db->set('updated', 'now()');
		$this->db->where('token', $token);
        $this->db->update('followthis');		
		return $this->db->affected_rows();
	}

	function deactivateSub($token, $secret) {
        if (!$id = $this->getSubIDFromToken($token)) {
        	if ($this->getSecretFromToken($token) != $secret) {
                return false;
            }
        }
        $this->db->set('status', 'deactivated');
        $this->db->where('id', $id);
        $this->db->update('followthis');		
		return $this->db->affected_rows();
	}

    public function getSubIDFromToken($token) {
        $this->db->where('token', $token);
       	$query = $this->db->get("followthis");
       	//echo print_r($query->result(), true);
        if (count($query->result()) > 0) {
           $result = $query->row(0);
           return $result->id;
        } else {
            return false;
        }        
    }

    public function getSubFromToken($token) {
        $this->db->where('token', $token);
       	$query = $this->db->get("followthis");
        if (count($query->result()) > 0) {
           return $query->row(0);
        } else {
            return false;
        }      
    }

    public function getSecretFromToken($token) {
        $this->db->where('token', $token);
       	$query = $this->db->get("followthis");
        if (count($query->result()) > 0) {
        	$result = $query->row(0);
        	$email = $result->email;
            return md5($email);
        } else {
            return false;
        }        
    }

    public function subExists($email, $url) {
        $this->db->where('email', $email);
        $this->db->where('url', $url);
		//$this->db->where('status', 'active');
       	$query = $this->db->get("followthis");
        if (count($query->result()) > 0) {
           return true;
        } else {
            return false;
        }      
    }

    public function getPendingUpdates() { 
		$sql = "SELECT * FROM followthis WHERE updated < CURRENT_TIMESTAMP - INTERVAL '15 minutes' AND status = ?";	
		$query = $this->db->query($sql, array('active'));
        if (count($query->result()) > 0) {
           return $query->result();
        } else {
            return false;
        }      
    }

	
}

