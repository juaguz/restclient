<?php namespace JuaGuz\RestClient;

use JuaGuz\Interfaces\RestClientInterface;

class RestClient implements RestClientInterface{

	/** 
	* Send a GET requst using cURL 
	* @param string $url to request 
	* @param array $get values to send 
	* @param array $options for cURL 
	* @return string 
	*/ 
	CONST TIMEOUT = 10;

	public function get($url, array $get = [], array $options = array()) {    
		$defaults = array( 
			CURLOPT_URL => $url. (strpos($url, '?') === FALSE ? '?' : ''). http_build_query($get), 
			CURLOPT_HEADER => 0, 
			CURLOPT_RETURNTRANSFER => TRUE, 
			CURLOPT_TIMEOUT => self::TIMEOUT
		); 

		$ch = curl_init(); 
		curl_setopt_array($ch, ($options + $defaults)); 
		if(!$result = curl_exec($ch)) return  trigger_error(curl_error($ch)); 
		curl_close($ch); 
		return $result; 
	} 
	
	/** 
	* Send a POST requst using cURL 
	* @param string $url to request 
	* @param array $post values to send 
	* @param array $options for cURL 
	* @return string 
	*/ 
	function post($url, array $post = NULL, array $options = array()) 
	{ 
		$defaults = array( 
			CURLOPT_POST => 1, 
			CURLOPT_HEADER => 0, 
			CURLOPT_URL => $url, 
			CURLOPT_FRESH_CONNECT => 1, 
			CURLOPT_RETURNTRANSFER => 1, 
			CURLOPT_FORBID_REUSE => 1, 
			CURLOPT_TIMEOUT => self::TIMEOUT, 
			CURLOPT_POSTFIELDS => http_build_query($post) 
		); 

		$ch = curl_init(); 
		curl_setopt_array($ch, ($options + $defaults)); 
		if( ! $result = curl_exec($ch))  return trigger_error(curl_error($ch)); 
		 
		curl_close($ch); 
		return $result; 
	} 
	
	public function put($url, array  $put = NULL, array $options = array()){

	}

	public function delete($url, array $delete = NULL, array $options = array()){}

	
}