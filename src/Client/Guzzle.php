<?php

namespace Arimac\Sigfox\Client;

use GuzzleHttp\Client;

class Guzzle implements ClientImpl {
    /**
     * @ignore
     *
     * @var Client
     */
    protected $client;

    /**
     * @inheritdoc
     */
    public function __construct(string $baseUrl, string $username, string $password)
    {
        $this->client = new Client([
            'base_uri' => $baseUrl,                                                                                                                                                   
            'headers' => [                                                                                                                                                                   
                'Authorization' => ['Basic'.base64_encode($username.':'.$password)],                                                                                                 
                "Content-Type"=> "application/json",
                "Accept"=> "application/json"
            ],
        ]); 
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
