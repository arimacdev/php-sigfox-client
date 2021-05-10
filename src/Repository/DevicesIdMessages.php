<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesIdMessagesList;
use Arimac\Sigfox\Request\DevicesIdLocations;
use Arimac\Sigfox\Request\DevicesIdUnsubscribe;
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
    public function list(DevicesIdMessagesList $request) : int
    {
        return $this->client->request('get', $this->bindUrlParams('/devices/{id}/messages', $this->id), $request, 'int');
    }
    /**
     * Return the number of messages for a given device, for the last day, last week and last month.
     * 
     */
    public function metric() : int
    {
        return $this->client->request('get', $this->bindUrlParams('/devices/{id}/messages/metric', $this->id), null, 'int');
    }
    /**
     * Retrieve a list of location data of a device according to request filters.
     * 
     */
    public function locations(DevicesIdLocations $request) : int
    {
        return $this->client->request('get', $this->bindUrlParams('/devices/{id}/locations', $this->id), $request, 'int');
    }
    /**
     * Set an unsubscription date for the device's token.
     * 
     */
    public function unsubscribe(DevicesIdUnsubscribe $request) : int
    {
        return $this->client->request('put', $this->bindUrlParams('/devices/{id}/unsubscribe', $this->id), $request, 'int');
    }
}