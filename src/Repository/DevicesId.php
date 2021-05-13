<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DevicesIdGet;
use Arimac\Sigfox\Definition\Device;
use Arimac\Sigfox\Request\DevicesIdUpdate;
use Arimac\Sigfox\Request\DevicesIdCallbacksNotDelivered;
use Arimac\Sigfox\Response\Generated\DevicesIdCallbacksNotDeliveredResponse;
use Arimac\Sigfox\Request\DevicesIdProductCertificate;
use Arimac\Sigfox\Definition\ProductCertificateWithPacResponse;
use Arimac\Sigfox\Request\DevicesIdLocations;
use Arimac\Sigfox\Response\Generated\DevicesIdLocationsResponse;
use Arimac\Sigfox\Request\DevicesIdUnsubscribe;
class DevicesId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The Device identifier (hexadecimal format)
     */
    protected ?string $id;
    /**
     * Creating the repository
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
     * Retrieve information about a given device.
     */
    public function get(DevicesIdGet $request) : Device
    {
        return $this->client->request('get', $this->bind('/devices/{id}', $this->id), $request, Device::class);
    }
    /**
     * Update a given device.
     */
    public function update(DevicesIdUpdate $request)
    {
        return $this->client->request('put', $this->bind('/devices/{id}', $this->id), $request);
    }
    /**
     * Delete a given device.
     */
    public function delete()
    {
        return $this->client->request('delete', $this->bind('/devices/{id}', $this->id), null);
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given device, in reverse chronological order (most
     * recent message first).
     */
    public function callbacksNotDelivered(DevicesIdCallbacksNotDelivered $request) : DevicesIdCallbacksNotDeliveredResponse
    {
        return $this->client->request('get', $this->bind('/devices/{id}/callbacks-not-delivered', $this->id), $request, DevicesIdCallbacksNotDeliveredResponse::class);
    }
    /**
     * @return DevicesIdCertificate
     */
    public function certificate() : DevicesIdCertificate
    {
        return new DevicesIdCertificate($this->client, $this->id);
    }
    /**
     * Retrieve the product certificate associated with a given device ID and PAC, when the device has not already been
     * created on the portal, only in CRA
     */
    public function productCertificate(DevicesIdProductCertificate $request) : ProductCertificateWithPacResponse
    {
        return $this->client->request('get', $this->bind('/devices/{id}/product-certificate', $this->id), $request, ProductCertificateWithPacResponse::class);
    }
    /**
     * @return DevicesIdConsumption
     */
    public function consumption() : DevicesIdConsumption
    {
        return new DevicesIdConsumption($this->client, $this->id);
    }
    /**
     * Disable sequence number check for the next message.
     */
    public function disengage()
    {
        return $this->client->request('post', $this->bind('/devices/{id}/disengage', $this->id), null);
    }
    /**
     * @return DevicesIdMessages
     */
    public function messages() : DevicesIdMessages
    {
        return new DevicesIdMessages($this->client, $this->id);
    }
    /**
     * Retrieve a list of location data of a device according to request filters.
     */
    public function locations(DevicesIdLocations $request) : DevicesIdLocationsResponse
    {
        return $this->client->request('get', $this->bind('/devices/{id}/locations', $this->id), $request, DevicesIdLocationsResponse::class);
    }
    /**
     * Set an unsubscription date for the device's token.
     */
    public function unsubscribe(DevicesIdUnsubscribe $request)
    {
        return $this->client->request('put', $this->bind('/devices/{id}/unsubscribe', $this->id), $request);
    }
}