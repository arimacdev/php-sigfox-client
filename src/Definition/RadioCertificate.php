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
    /**
     * @param int[] modes The certificate's mode code (0 -> Uplink only, 1 -> Uplink and downlink)
     */
    function setModes(array $modes)
    {
        $this->modes = $modes;
    }
    /**
     * @return int[] The certificate's mode code (0 -> Uplink only, 1 -> Uplink and downlink)
     */
    function getModes() : array
    {
        return $this->modes;
    }
    /**
     * @param int inputSensitivity The certificate's input sensitivity
     */
    function setInputSensitivity(int $inputSensitivity)
    {
        $this->inputSensitivity = $inputSensitivity;
    }
    /**
     * @return int The certificate's input sensitivity
     */
    function getInputSensitivity() : int
    {
        return $this->inputSensitivity;
    }
}