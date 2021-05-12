<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesIdMessagesList;
use Arimac\Sigfox\Response\Generated\DevicesIdMessagesListResponse;
use Arimac\Sigfox\Response\Generated\DevicesIdMessagesMetricResponse;
class DevicesIdMessages
{
    /**
     * The Device identifier (hexadecimal format)
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve a list of messages for a given device according to request filters, with a 3-day history.
     * 
     */
    public function list(DevicesIdMessagesList $request) : DevicesIdMessagesListResponse
    {
        return $this->client->request('get', $this->bind('/devices/{id}/messages', $this->id), $request, DevicesIdMessagesListResponse::class);
    }
    /**
     * Return the number of messages for a given device, for the last day, last week and last month.
     * 
     */
    public function metric() : DevicesIdMessagesMetricResponse
    {
        return $this->client->request('get', $this->bind('/devices/{id}/messages/metric', $this->id), null, DevicesIdMessagesMetricResponse::class);
    }
}