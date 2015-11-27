<?php namespace Mediakreasi\Api; 

use \Config;

use Mediakreasi\Api\library\Connection;

class Api
{
	private $params;
	private $uri;
	private $result;
	 
	public function __construct() {
		$this->uri = Config::get('host');
		$this->params = [];
    }
	
	public static function get($uri = null) {
		if (count($this->params) > 0)
        	$url = $uri . '?' . http_build_query($this->params);
			
		// clean up
        $this->params = null;
		
		$result = Connection::get($url);
		
		$data = json_decode($result);
		if (json_last_error() === JSON_ERROR_NONE) {
    		// JSON is valid
			$this->result = $data;
		} else {
			if (is_array($result)) {
				$this->result = $result;
			} else {
				$this->result = (array)$result;
			}
		}
	}
	
	public function __get($name) {
		if ($name == 'all') {

			return $this->result;
			
		} else {
			
			if (isset($this->result[$name])) {
				
				return $this->result[$name];
				
			} else {
				
				return null;
				
			}
		}
	}
	
	public function __set($name, $value) {
		if ($value !== null)
            $this->params[$name] = $value;

        return $this;
	}
}