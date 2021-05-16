<?php

namespace Arimac\Sigfox\Test\Integration;

use Arimac\Sigfox\Client\ClientImpl;
use GuzzleHttp\Client;

class MockClient implements ClientImpl {
    /** @var Client **/
    protected $client;

    /**
     * @inheritdoc
     */
    public function __construct(string $baseUrl, string $username, string $password)
    {
    }

    public function setClient(Client $client){
        $this->client = $client; 
    }

    /**
     * @inheritdoc
     */
    function request(string $method, string $url, array $body=null, array $query=null):array {
        $res = $this->client->request($method, $url, [
            "body"=> $body?json_encode($body):null,
            "query"=> $query
        ]);
        return [$res->getStatusCode(), $res->getBody()];
    }
}
