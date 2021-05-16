<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DevicesIdMessagesList;
use Arimac\Sigfox\Response\Generated\DevicesIdMessagesListResponse;
use Arimac\Sigfox\Response\Generated\DevicesIdMessagesMetricResponse;
class DevicesIdMessages extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The Device identifier (hexadecimal format)
     *
     * @internal
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     * @param string $id     The Device identifier (hexadecimal format)
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve a list of messages for a given device according to request filters, with a 3-day history.
     *
     * @param DevicesIdMessagesList $request The query and body parameters to pass
     *
     * @return DevicesIdMessagesListResponse
     */
    public function list(?DevicesIdMessagesList $request = null) : DevicesIdMessagesListResponse
    {
        return $this->client->call('get', $this->bind('/devices/{id}/messages', $this->id), $request, DevicesIdMessagesListResponse::class);
    }
    /**
     * Return the number of messages for a given device, for the last day, last week and last month.
     *
     * @return DevicesIdMessagesMetricResponse
     */
    public function metric() : DevicesIdMessagesMetricResponse
    {
        return $this->client->call('get', $this->bind('/devices/{id}/messages/metric', $this->id), null, DevicesIdMessagesMetricResponse::class);
    }
}