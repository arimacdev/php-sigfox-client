<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\RadioCertificate;
use Arimac\Sigfox\Definition\ModemCertificateRadioConfiguration;
class ModemCertificate extends RadioCertificate
{
    /**
     * Radio configurations available for this certificate
     *
     * @var ModemCertificateRadioConfiguration[]
     */
    protected array $radioConfigurations;
    /**
     * The modem certificate has repeater function or not
     *
     * @var bool
     */
    protected bool $repeaterFunction;
}