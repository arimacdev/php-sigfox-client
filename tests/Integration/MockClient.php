<?php

namespace Arimac\Sigfox\Test\Integration;

use Arimac\Sigfox\Client\ClientImpl;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class MockClient implements ClientImpl
{
    /** @var Client **/
    protected $client;

    /**
     * @inheritdoc
     */
    public function __construct(string $baseUrl, string $username, string $password)
    {
    }

    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @inheritdoc
     */
    function request(string $method, string $url, array $body = null, array $query = null, $sink = null): array
    {
        try {
            $res = $this->client->request($method, $url, [
                "body" => $body ? json_encode($body) : null,
                "query" => $query,
                "sink" => $sink
            ]);
            return [$res->getStatusCode(), $res->getBody()];
        } catch (RequestException $e) {
            $res = $e->getResponse();
            if ($res) {
                return [$res->getStatusCode(), $res->getBody()];
            }
        }
        return [0, ''];
    }
}
