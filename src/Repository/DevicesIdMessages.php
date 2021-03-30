<?php

namespace Arimac\Sigfox\Repository;

class DevicesIdMessages
{
    /**
     * The Device identifier (hexadecimal format)
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve a list of messages for a given device according to request filters, with a 3-day history.
     *
     * @param int $request
     * @return int
     */
    function list(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}/messages', $request, 'int');
    }
    /**
     * Return the number of messages for a given device, for the last day, last week and last month.
     *
     * @param int $request
     * @return int
     */
    function metric(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}/messages/metric', $request, 'int');
    }
    /**
     * Retrieve a list of location data of a device according to request filters.
     *
     * @param int $request
     * @return int
     */
    function locations(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}/locations', $request, 'int');
    }
    /**
     * Set an unsubscription date for the device's token.
     *
     * @param int $request
     * @return int
     */
    function unsubscribe(int $request) : int
    {
        return $this->client->request('put', '/devices/{id}/unsubscribe', $request, 'int');
    }
}