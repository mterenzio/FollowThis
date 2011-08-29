<?php

class JsonDatasource {

    var $json_datasource_url = null;
    var $encoding_hook = null;

    public function __construct($json_datasource_url, $encoding_hook=null) {
        $this->json_datasource_url = $json_datasource_url;
        if (!$encoding_hook) {
        	$encoding_hook = new DefaultEncodingHook();
        }
        $this->encoding_hook = $encoding_hook;
    }


    /**
     * Magic method to invoke an json server method.
     */
    public function __call($call, $args=array()) {
    	if(count($args) != 0) {
    		$args=$args[0];
    	}
		$url = $this->json_datasource_url . $call;
		$post_field = html_entity_decode($this->query_string_encode($args,null));
		$file = $this->constructUrl($call, $args);
		$json = file_get_contents($file);

		return json_decode($json, true);
    }
    
	public function constructUrl($action, $params) {
		$url = $this->json_datasource_url . $action;
		$query = html_entity_decode($this->query_string_encode($params,null));
		//print($url . '?' . $query . "\n");
		return $url . '?' . $query;
	}
	
	public function query_string_encode($data, $key) {
		$ret = array();
		foreach ((array)$data as $k => $v) {
			if(!empty($key)) {
				$k = $key;
      			}
			if (is_array($v) || is_object($v)) {
				//array_push($ret, $this->query_string_encode($v,$k));
				$ret = $this->encoding_hook->encode_array($k, $v, $ret);
			} else if (isset($v)) {
    				$ret = $this->encoding_hook->encode($k, $v, $ret);
	    		}
		}	
		$sep = ini_get('arg_separator.output');
		return implode($sep, $ret);
	}

    private function get_microsecs() {
		$time = gettimeofday(true);
		$seconds = $time['sec'];
		$micros = $time['usec'];
		return $seconds . "." . $micros;
    }
}

class DefaultEncodingHook {
	public function encode($k, $v, $ret) {
		array_push($ret, urlencode($k).'='.urlencode($v));
		return $ret;
	}
}

class PublicApiEncodingHook {

    var $access_key = null;
    var $shared_secret = null;
    var $id_params = array("topic_id", "quote_id", "image_id", "article_id", "source_id");
    var $name_params = array("query", "name", "url", "content");

    public function __construct($access_key, $shared_secret) {
        $this->access_key = $access_key;
        $this->shared_secret = $shared_secret;
    }

    public function encode($k, $v, $ret) {
        $is_id = false;
        $is_name = false;
        if ($is_id = in_array($k, $this->id_params) || $is_name = in_array($k, $this->name_params)) {
            #if ($is_id && is_numeric($v)) {
            #    $v = encode_id($v);
            #}
            $signature = md5($this->access_key . $this->shared_secret . $v);
            array_push($ret, urlencode("signature").'='.urlencode($signature));
            array_push($ret, urlencode("accesskey").'='.urlencode($this->access_key));
        }
        array_push($ret, urlencode($k).'='.urlencode($v));
	return $ret;
    }

	public function encode_array($k, $v, $ret) {
		$is_id = false;
		$is_name = false;
		if ($is_id=in_array($k,$this->id_params) || $is_name=in_array($k,$this->name_params)) {
			sort($v);
			$signature = md5($this->access_key . $this->shared_secret . implode("",$v));
		        array_push($ret, urlencode("signature").'='.urlencode($signature));
            		array_push($ret, urlencode("accesskey").'='.urlencode($this->access_key));
		}
		foreach($v as $x) {
			array_push($ret, urlencode($k).'='.urlencode($x));
		}
		return $ret;
	}


}

class PublicApi extends JsonDatasource {
    public function __construct($json_datasource_url, $access_key, $shared_secret) {
        parent::__construct($json_datasource_url, new PublicApiEncodingHook($access_key, $shared_secret));
    }
}
