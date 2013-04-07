<?php

class samplecurl extends MY_Model{

	function index()
	{
		// Start session (also wipes existing/previous sessions)
		$this->curl->create('http://example.com/');

		// Option & Options
		$this->curl->option(CURLOPT_BUFFERSIZE, 10);
		$this->curl->options(array(CURLOPT_BUFFERSIZE => 10));

		// More human looking options
		$this->curl->option('buffersize', 10);

		// Login to HTTP user authentication
		$this->curl->http_login('username', 'password');

		// Post - If you do not use post, it will just run a GET request
		$post = array('foo'=>'bar');
		$this->curl->post($post);

		// Cookies - If you do not use post, it will just run a GET request
		$vars = array('foo'=>'bar');
		$this->curl->set_cookies($vars);

		// Proxy - Request the page through a proxy server
		// Port is optional, defaults to 80
		$this->curl->proxy('http://example.com', 1080);
		$this->curl->proxy('http://example.com');

		// Proxy login
		$this->curl->proxy_login('username', 'password');

		// Execute - returns responce
		echo $this->curl->execute();

		// Debug data ------------------------------------------------

		// Errors
		$this->curl->error_code; // int
		$this->curl->error_string;

		// Information
		$this->curl->info; // array
	}
}