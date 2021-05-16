<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DevicesIdGet;
use Arimac\Sigfox\Definition\Device;
use Arimac\Sigfox\Definition\DeviceUpdateJob;
use Arimac\Sigfox\Request\DevicesIdUpdate;
use Arimac\Sigfox\Request\DevicesIdCallbacksNotDelivered;
use Arimac\Sigfox\Response\Generated\DevicesIdCallbacksNotDeliveredResponse;
use Arimac\Sigfox\Request\DevicesIdProductCertificate;
use Arimac\Sigfox\Definition\ProductCertificateWithPacResponse;
use Arimac\Sigfox\Request\DevicesIdLocations;
use Arimac\Sigfox\Response\Generated\DevicesIdLocationsResponse;
use Arimac\Sigfox\Definition\TokenUnsubscribe;
use Arimac\Sigfox\Request\DevicesIdUnsubscribe;
class DevicesId extends Repository
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
     * Retrieve information about a given device.
     *
     * @param DevicesIdGet $request The query and body parameters to pass
     *
     * @return Device
     */
    public function get(?DevicesIdGet $request = null) : Device
    {
        return $this->client->call('get', $this->bind('/devices/{id}', $this->id), $request, Device::class);
    }
    /**
     * Update a given device.
     *
     * @param DeviceUpdateJob $device The device to update
     */
    public function update(DeviceUpdateJob $device)
    {
        $request = new DevicesIdUpdate();
        $request->setDevice($device);
        return $this->client->call('put', $this->bind('/devices/{id}', $this->id), $request);
    }
    /**
     * Delete a given device.
     */
    public function delete()
    {
        return $this->client->call('delete', $this->bind('/devices/{id}', $this->id), null);
    }
    /**
     * Retrieve a list of undelivered callbacks and errors for a given device, in reverse chronological order (most
     * recent message first).
     *
     * @param DevicesIdCallbacksNotDelivered $request The query and body parameters to pass
     *
     * @return DevicesIdCallbacksNotDeliveredResponse
     */
    public function callbacksNotDelivered(?DevicesIdCallbacksNotDelivered $request = null) : DevicesIdCallbacksNotDeliveredResponse
    {
        return $this->client->call('get', $this->bind('/devices/{id}/callbacks-not-delivered', $this->id), $request, DevicesIdCallbacksNotDeliveredResponse::class);
    }
    /**
     * @return DevicesIdCertificate
     */
    public function certificate() : DevicesIdCertificate
    {
        return new DevicesIdCertificate($this->client, $this->id);
    }
    /**
     * Retrieve the product certificate associated with a given device ID and PAC, when the device has not already
     * been created on the portal, only in CRA
     *
     * @param string $pac The device's PAC (hexadecimal format)
     *
     * @return ProductCertificateWithPacResponse
     */
    public function productCertificate(string $pac) : ProductCertificateWithPacResponse
    {
        $request = new DevicesIdProductCertificate();
        $request->setPac($pac);
        return $this->client->call('get', $this->bind('/devices/{id}/product-certificate', $this->id), $request, ProductCertificateWithPacResponse::class);
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
        return $this->client->call('post', $this->bind('/devices/{id}/disengage', $this->id), null);
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
     *
     * @param DevicesIdLocations $request The query and body parameters to pass
     *
     * @return DevicesIdLocationsResponse
     */
    public function locations(?DevicesIdLocations $request = null) : DevicesIdLocationsResponse
    {
        return $this->client->call('get', $this->bind('/devices/{id}/locations', $this->id), $request, DevicesIdLocationsResponse::class);
    }
    /**
     * Set an unsubscription date for the device's token.
     *
     * @param TokenUnsubscribe $unsubscriptionTime the unsubscription time (in milliseconds since the Unix Epoch)
     */
    public function unsubscribe(TokenUnsubscribe $unsubscriptionTime)
    {
        $request = new DevicesIdUnsubscribe();
        $request->setUnsubscriptionTime($unsubscriptionTime);
        return $this->client->call('put', $this->bind('/devices/{id}/unsubscribe', $this->id), $request);
    }
}