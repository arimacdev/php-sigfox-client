<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesIdGet;
use Arimac\Sigfox\Request\DevicesIdUpdate;
use Arimac\Sigfox\Request\DevicesIdCallbacksNotDelivered;
class DevicesId
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
     * Retrieve information about a given device.
     * 
     */
    public function get(DevicesIdGet $request) : int
    {
        return $this->client->request('get', $this->bindUrlParams('/devices/{id}', $this->id), $request, 'int');
    }
    /**
     * Update a given device.
     * 
     */
    public function update(DevicesIdUpdate $request) : int
    {
        return $this->client->request('put', $this->bindUrlParams('/devices/{id}', $this->id), $request, 'int');
    }
    /**
     * Delete a given device.
     * 
     */
    public function delete() : int
    {
        return $this->client->request('delete', $this->bindUrlParams('/devices/{id}', $this->id), null, 'int');
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given device, in reverse chronological order (most
     * recent message first).
     * 
     */
    public function callbacksNotDelivered(DevicesIdCallbacksNotDelivered $request) : int
    {
        return $this->client->request('get', $this->bindUrlParams('/devices/{id}/callbacks-not-delivered', $this->id), $request, 'int');
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