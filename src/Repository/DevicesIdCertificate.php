<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\DevicesIdCertificateModem;
use Arimac\Sigfox\Definition\ModemCertificate;
use Arimac\Sigfox\Request\DevicesIdCertificateProduct;
use Arimac\Sigfox\Definition\ProductCertificate;
class DevicesIdCertificate extends Repository
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
     * Retrieve the modem certificate associated with a device.
     *
     * @param string|undefined $fields Defines the other available fields to be returned in the response.
     *                                 
     *
     * @return ModemCertificate
     */
    public function modem(?string $fields) : ModemCertificate
    {
        $request = new DevicesIdCertificateModem();
        $request->setFields($fields);
        return $this->client->call('get', $this->bind('/devices/{id}/certificate/modem', $this->id), $request, ModemCertificate::class);
    }
    /**
     * Retrieve the product certificate associated with a device already registered.
     *
     * @param string|undefined $fields Defines the other available fields to be returned in the response.
     *                                 
     *
     * @return ProductCertificate
     */
    public function product(?string $fields) : ProductCertificate
    {
        $request = new DevicesIdCertificateProduct();
        $request->setFields($fields);
        return $this->client->call('get', $this->bind('/devices/{id}/certificate/product', $this->id), $request, ProductCertificate::class);
    }
}