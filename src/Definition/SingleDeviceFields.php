<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CertificateUpdate;
class SingleDeviceFields
{
    /**
     * true if the device is activable and can take a token. Not used if the device has already a token
     *
     * @var bool
     */
    protected bool $activable;
    /**
     * Allow token renewal ?
     *
     * @var bool
     */
    protected bool $automaticRenewal;
    /**
     * The device's provided latitude
     *
     * @var int
     */
    protected int $lat;
    /**
     * The device's provided longitude
     *
     * @var int
     */
    protected int $lng;
    /** @var CertificateUpdate */
    protected CertificateUpdate $productCertificate;
    /**
     * If the device is a prototype or not
     *
     * @var bool
     */
    protected bool $prototype;
}