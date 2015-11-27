<?php namespace Mediakreasi\Api; 

use \Config;

use Mediakreasi\Api\library\Connection;

class Api
{
	protected $params;
	protected $uri;
	protected $result;
	 
	public function __construct() {
        $this->config = $config;
		$this->uri = Config::get('host');
    }
	
	public static function get($uri = null) {
		$url = $this->uri;
		
		if (count($this->query) > 0)
        	$url .= '?' . http_build_query($this->params);
			
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
	
	public static function __get($name) {
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
	
	public static function __set($name, $value) {
		if ($value !== null)
            $this->params[$name] = $value;

        return $this;
	}
}