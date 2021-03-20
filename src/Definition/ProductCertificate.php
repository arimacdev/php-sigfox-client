<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\RadioCertificate;
use Arimac\Sigfox\Definition\ProductCertificateRadioConfiguration;
class ProductCertificate extends RadioCertificate
{
    /**
     * Radio configurations available for this certificate
     *
     * @var ProductCertificateRadioConfiguration[]
     */
    protected array $radioConfigurations;
    /**
     * The product certificate has repeater function or not
     *
     * @var bool
     */
    protected bool $devKit;
    /**
     * @param ProductCertificateRadioConfiguration[] radioConfigurations Radio configurations available for this certificate
     */
    function setRadioConfigurations(array $radioConfigurations)
    {
        $this->radioConfigurations = $radioConfigurations;
    }
    /**
     * @return ProductCertificateRadioConfiguration[] Radio configurations available for this certificate
     */
    function getRadioConfigurations() : array
    {
        return $this->radioConfigurations;
    }
    /**
     * @param bool devKit The product certificate has repeater function or not
     */
    function setDevKit(bool $devKit)
    {
        $this->devKit = $devKit;
    }
    /**
     * @return bool The product certificate has repeater function or not
     */
    function getDevKit() : bool
    {
        return $this->devKit;
    }
}