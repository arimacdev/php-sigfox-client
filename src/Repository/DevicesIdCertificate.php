<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesIdCertificateModem;
use Arimac\Sigfox\Repository\DevicesIdCertificateProduct;
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
     * @return DevicesIdCertificateModem
     */
    public function modem() : DevicesIdCertificateModem
    {
        return new DevicesIdCertificateModem($this->id);
    }
    /**
     * @return DevicesIdCertificateProduct
     */
    public function product() : DevicesIdCertificateProduct
    {
        return new DevicesIdCertificateProduct($this->id);
    }
}