<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\DevicesIdCertificateModem;
use Arimac\Sigfox\Request\DevicesIdCertificateProduct;
class DevicesIdCertificate
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
     * Retrieve the modem certificate associated with a device.
     * 
     */
    public function modem(DevicesIdCertificateModem $request) : int
    {
        return $this->client->request('get', $this->bind('/devices/{id}/certificate/modem', $this->id), $request, 'int');
    }
    /**
     * Retrieve the product certificate associated with a device already registered.
     * 
     */
    public function product(DevicesIdCertificateProduct $request) : int
    {
        return $this->client->request('get', $this->bind('/devices/{id}/certificate/product', $this->id), $request, 'int');
    }
}