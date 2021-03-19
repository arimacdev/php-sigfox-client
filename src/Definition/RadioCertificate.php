<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonCertificate;
class RadioCertificate extends CommonCertificate
{
    /**
     * The certificate's mode code (0 -> Uplink only, 1 -> Uplink and downlink)
     *
     * @var int[]
     */
    protected array $modes;
    /**
     * The certificate's input sensitivity
     *
     * @var int
     */
    protected int $inputSensitivity;
}