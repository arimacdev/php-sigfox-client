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
}