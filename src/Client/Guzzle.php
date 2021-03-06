<?php

namespace Arimac\Sigfox\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;

class Guzzle implements ClientImpl
{
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
                'Authorization' => ['Basic ' . base64_encode($username . ':' . $password)],
                "Content-Type" => "application/json",
                "Accept" => "application/json"
            ],
        ]);
    }

    /**
     * @inheritdoc
     *
     * @throws GuzzleException
     */
    function request(string $method, string $url, array $body = null, array $query = null, $save = null): array
    {
        try {
            $res = $this->client->request($method, $url, [
                "body" => $body ? json_encode($body) : null,
                "query" => $query,
                "sink"=> $save
            ]);
            return [$res->getStatusCode(), $res->getBody(), $res->getHeaders()];
        } catch (RequestException $e) {
            $res = $e->getResponse();
            if ($res) {
                return [$res->getStatusCode(), $res->getBody()];
            }
            return [0, '', []];
        }
    }
}
