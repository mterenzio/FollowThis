<?php

class Sub_Model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	/** Utility Methods **/
	function _required($required, $data)
	{
		foreach($required as $field)
			if(!isset($data[$field])) return false;
			
		return true;
	}
	
	function _default($defaults, $options)
	{
		return array_merge($defaults, $options);
	}
	
	function createSub($options = array()) {
		// required values
		if(!$this->_required(
			array('sub_user_guid', 'sub_user_type', 'sub_url'),
			$options)
		) return false;		 
		$timestamp = time();
		$userguid = $options['sub_user_guid'];
        $token = md5($timestamp.$userguid);
        if ($options['sub_user_type'] == 'email') {
        	$parts = explode("@", $options['sub_user_type']);
        	$host = strtolower($parts[1]);
        	$local = strtolower($parts[0]);
        	$normalemail = $local."@".$host;
        	$options['sub_user_guid'] = $normalemail;
        }
        $secret = md5($normalemail);
		$this->db->insert('users', $options);
		if ($this->db->insert_id()) {   
            $headers = 'From: support@followth.is' . "\r\n" .
            'Reply-To: support@followth.is' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
             mail($email, "Activate your FollowThis alert", "Hi,\n\nYour alert for for terms has been successfully created.
In order to activate it, click on the following link or copy/paste it into your browser:\n\nIf you did not make such a request, please ignore this email.\n\nhttp://followth.is/alert/verify/$token/$secret", $headers);
            return true;  
        } else {
            return false;
        }        
	}
	
	function verifySub($token, $secret) {
        if (!$id = $this->getSubIDFromToken($token)) {
        	if ($this->getSecretFromToken($token) != $secret) {
                return false;
            }
        }
        $this->db->set('sub_status', 'active');
		$this->db->where('sub_id', $id);
        $this->db->update('subs');		
		return $this->db->affected_rows();
	}

	function deactivateSub($token, $secret) {
        if (!$id = $this->getSubIDFromToken($token)) {
        	if ($this->getSecretFromToken($token) != $secret) {
                return false;
            }
        }
        $this->db->set('sub_status', 'deactivated');
        $this->db->where('sub_id', $id);
        $this->db->update('subs');		
		return $this->db->affected_rows();
	}

    public function getSubIDFromToken($token) {
        $this->db->where('sub_token', $token);
       	$query = $this->db->get("subs");
        if ($query) {
           return $query->row(0);
        } else {
            return false;
        }        
    }

    public function getSubFromToken($token) {
        $this->db->where('sub_token', $token);
       	$query = $this->db->get("subs");
        if ($query) {
           return $query->result();
        } else {
            return false;
        }      
    }

    public function getSecretFromToken($token) {
        $this->db->where('sub_token', $token);
       	$query = $this->db->get("subs");
        if ($query) {
        	$email = $query->row(1);
           return md5($email);
        } else {
            return false;
        }        
    }
	
}