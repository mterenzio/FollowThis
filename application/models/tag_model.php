<?php

class Tag_Model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function createTag($options)
	{
		// required values
		if(!$this->_required(array('tag'),$options)) {
			return false;
	    } else {
	    	$tag = options['tag'];
            $data = array($tag);
            $statement = $this->dbh->prepare("INSERT INTO tags (tag_name) VALUES (?)");
            $result = $this->dbh->execute($statement, $data);
            if (DB::isError($result)) {
                return false;
            } else {
				return true;
            }
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