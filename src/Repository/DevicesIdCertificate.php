<?php

namespace Arimac\Sigfox\Repository;

class DevicesIdCertificate
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
     * Retrieve the modem certificate associated with a device.
     *
     * @param int $request
     * @return int
     */
    function modem(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}/certificate/modem', $request, 'int');
    }
    /**
     * Retrieve the product certificate associated with a device already registered.
     *
     * @param int $request
     * @return int
     */
    function product(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}/certificate/product', $request, 'int');
    }
    /**
     * Retrieve the product certificate associated with a given device ID and PAC, when the device has not already been created on the portal, only in CRA
     *
     * @param int $request
     * @return int
     */
    function productCertificate(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}/product-certificate', $request, 'int');
    }
}