<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Custom\HttpRequest;

class HttpRequestTest extends TestCase
{
    // Assuming you already have a testGetRequest method here

    public function testPostRequest()
    {
        // Create a mock handler to return a fixed response for the POST request
        $mock = new MockHandler([
            new Response(200, [], json_encode(['message' => 'Data received'])), // Simulate a JSON response
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        // Instantiate your HttpRequest class with the mock client
        $httpRequest = new HttpRequest($client); // Adjust your class for dependency injection if needed

        // Define the URL and data for the POST request
        $url = 'http://example.com/post-endpoint';
        $data = ['key' => 'value'];

        // Test the postRequest method
        $response = $httpRequest->postRequest($url, $data); // Ensure your method accepts data for the POST body

        // Decode the JSON response for assertion
        $decodedResponse = json_decode($response, true);

        // Assert that the response contains the expected data
        $this->assertIsArray($decodedResponse);
        $this->assertArrayHasKey('message', $decodedResponse);
        $this->assertEquals('Data received', $decodedResponse['message']);
    }
}

