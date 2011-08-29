<?php

/**
 * Follow_Model
 * 
 * @package Follows
 */

class Follow_Model extends CI_Model
{
	
	/** Utility Methods **/
	function _required($required, $data)
	{
		foreach($required as $field)
			if(!isset($data[$field])) return false;
			
		return true;
	}
	
	function AddFollow($options = array())
	{
		// required values
		if(!$this->_required(
			array('follow_user', 'follow_url'),
			$options)
		) return false;			
		
		$this->db->insert('follows', $options);
		
		return $this->db->insert_id();
	}
	
}

