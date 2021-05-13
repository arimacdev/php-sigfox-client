<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DevicesIdCertificateModem;
use Arimac\Sigfox\Definition\ModemCertificate;
use Arimac\Sigfox\Request\DevicesIdCertificateProduct;
use Arimac\Sigfox\Definition\ProductCertificate;
class DevicesIdCertificate
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
     * Retrieve the modem certificate associated with a device.
     */
    public function modem(DevicesIdCertificateModem $request) : ModemCertificate
    {
        return $this->client->request('get', $this->bind('/devices/{id}/certificate/modem', $this->id), $request, ModemCertificate::class);
    }
    /**
     * Retrieve the product certificate associated with a device already registered.
     */
    public function product(DevicesIdCertificateProduct $request) : ProductCertificate
    {
        return $this->client->request('get', $this->bind('/devices/{id}/certificate/product', $this->id), $request, ProductCertificate::class);
    }
}