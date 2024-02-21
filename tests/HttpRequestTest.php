<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Custom\HttpRequest;

final class HttpRequestTest extends TestCase
{
	public function testGetRequest()
	{
		$mock = new MockHandler([
			new Response(200, [], 'Hello, World'),
			new Response(404, [], 'Not Found'),
		]);

		$handlerStack = HandlerStack::create($mock);
		$client = new Client(['handler' => $handlerStack]);

		$httpRequest = new HttpRequest($client);

		$reponse = $httpRequest->getRequest('http://example.com');

		$this->assertEquals('Hello, World', $reponse);
	}
}
