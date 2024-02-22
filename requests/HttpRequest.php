<?php

namespace Custom;

require_once 'vendor/autoload.php'; // Make sure to include the Composer autoload file

use GuzzleHttp\Client;

class HttpRequest 
{
	private $client;

	public function __construct()
	{
		$this->client = new Client(); // Instantiate the GuzzleHttp client
	}

	public function getRequest(string $url) : string
	{
		$response = $this->client->request('GET', $url);
		return $response->getBody()->getContents();
	}

	public function postRequest(string $url, array $data = []) : string
	{
		$response = $this->client->request('POST', $url, ['form_params' => $data]);
		return $response->getBody()->getContents();
	}

	public function putRequest(string $url, array $data = []) : string
	{
		$response = $this->client->request('PUT', $url, ['json' => $data]);
		return $response->getBody()->getContents();
	}

	public function delRequest(string $url) : string 
	{
		$response = $this->client->request('DELETE', $url);
		return $response->getBody()->getContents();
	}
}
