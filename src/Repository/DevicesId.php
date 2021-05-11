<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesIdGet;
use Arimac\Sigfox\Request\DevicesIdUpdate;
use Arimac\Sigfox\Request\DevicesIdCallbacksNotDelivered;
use Arimac\Sigfox\Request\DevicesIdProductCertificate;
use Arimac\Sigfox\Request\DevicesIdLocations;
use Arimac\Sigfox\Request\DevicesIdUnsubscribe;
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
        return $this->client->request('get', $this->bind('/devices/{id}', $this->id), $request, 'int');
    }
    /**
     * Update a given device.
     * 
     */
    public function update(DevicesIdUpdate $request) : int
    {
        return $this->client->request('put', $this->bind('/devices/{id}', $this->id), $request, 'int');
    }
    /**
     * Delete a given device.
     * 
     */
    public function delete() : int
    {
        return $this->client->request('delete', $this->bind('/devices/{id}', $this->id), null, 'int');
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given device, in reverse chronological order (most
     * recent message first).
     * 
     */
    public function callbacksNotDelivered(DevicesIdCallbacksNotDelivered $request) : int
    {
        return $this->client->request('get', $this->bind('/devices/{id}/callbacks-not-delivered', $this->id), $request, 'int');
    }
    /**
     * @return DevicesIdCertificate
     */
    public function certificate() : DevicesIdCertificate
    {
        return new DevicesIdCertificate($this->id);
    }
    /**
     * Retrieve the product certificate associated with a given device ID and PAC, when the device has not already been
     * created on the portal, only in CRA
     * 
     */
    public function productCertificate(DevicesIdProductCertificate $request) : int
    {
        return $this->client->request('get', $this->bind('/devices/{id}/product-certificate', $this->id), $request, 'int');
    }
    /**
     * @return DevicesIdConsumption
     */
    public function consumption() : DevicesIdConsumption
    {
        return new DevicesIdConsumption($this->id);
    }
    /**
     * Disable sequence number check for the next message.
     * 
     */
    public function disengage() : int
    {
        return $this->client->request('post', $this->bind('/devices/{id}/disengage', $this->id), null, 'int');
    }
    /**
     * @return DevicesIdMessages
     */
    public function messages() : DevicesIdMessages
    {
        return new DevicesIdMessages($this->id);
    }
    /**
     * Retrieve a list of location data of a device according to request filters.
     * 
     */
    public function locations(DevicesIdLocations $request) : int
    {
        return $this->client->request('get', $this->bind('/devices/{id}/locations', $this->id), $request, 'int');
    }
    /**
     * Set an unsubscription date for the device's token.
     * 
     */
    public function unsubscribe(DevicesIdUnsubscribe $request) : int
    {
        return $this->client->request('put', $this->bind('/devices/{id}/unsubscribe', $this->id), $request, 'int');
    }
}