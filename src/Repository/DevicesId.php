<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesIdCertificate;
use Arimac\Sigfox\Repository\DevicesIdConsumption;
use Arimac\Sigfox\Repository\DevicesIdMessages;
class DevicesId
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
     * Retrieve information about a given device.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}', $request, 'int');
    }
    /**
     * Update a given device.
     *
     * @param int $request
     * @return int
     */
    function update(int $request) : int
    {
        return $this->client->request('put', '/devices/{id}', $request, 'int');
    }
    /**
     * Delete a given device.
     *
     * @param int $request
     * @return int
     */
    function delete(int $request) : int
    {
        return $this->client->request('delete', '/devices/{id}', $request, 'int');
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given device, in reverse chronological order (most recent message first).
     *
     * @param int $request
     * @return int
     */
    function callbacksNotDelivered(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}/callbacks-not-delivered', $request, 'int');
    }
    /**
     * @return DevicesIdCertificate
     */
    public function certificate() : DevicesIdCertificate
    {
        return new DevicesIdCertificate($this->id);
    }
    /**
     * @return DevicesIdConsumption
     */
    public function consumption() : DevicesIdConsumption
    {
        return new DevicesIdConsumption($this->id);
    }
    /**
     * @return DevicesIdMessages
     */
    public function messages() : DevicesIdMessages
    {
        return new DevicesIdMessages($this->id);
    }
}