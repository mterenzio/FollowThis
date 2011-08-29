<?php

/**
 * User_Model
 * 
 * @package Users
 */

class User_Model extends CI_Model
{
	
	/** Utility Methods **/
	function _required($required, $data)
	{
		foreach($required as $field)
			if(!isset($data[$field])) return false;
			
		return true;
	}
	
	function AddUser($options = array())
	{
		// required values
		if(!$this->_required(
			array('users_guid'),
			$options)
		) return false;			
		
		$this->db->insert('users', $options);
		
		return $this->db->insert_id();
	}
	
	function hasEmail() {
		if ($this->session->userdata('email')) {
			return true;
		} else {
			return false;
		}
	}
	
	function storeEmail($options)
	{
		// required values
		if(!$this->_required(
			array('email'),
			$options)
		) return false;
		
		$email = $options['email'];
		
		$this->session->set_userdata('email', $email);		
		return true;
	}	
}

