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
    /**
     * @param ModemCertificateRadioConfiguration[] radioConfigurations Radio configurations available for this certificate
     */
    function setRadioConfigurations(array $radioConfigurations)
    {
        $this->radioConfigurations = $radioConfigurations;
    }
    /**
     * @return ModemCertificateRadioConfiguration[] Radio configurations available for this certificate
     */
    function getRadioConfigurations() : array
    {
        return $this->radioConfigurations;
    }
    /**
     * @param bool repeaterFunction The modem certificate has repeater function or not
     */
    function setRepeaterFunction(bool $repeaterFunction)
    {
        $this->repeaterFunction = $repeaterFunction;
    }
    /**
     * @return bool The modem certificate has repeater function or not
     */
    function getRepeaterFunction() : bool
    {
        return $this->repeaterFunction;
    }
}