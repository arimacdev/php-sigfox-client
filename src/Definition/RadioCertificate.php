<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class RadioCertificate extends CommonCertificate
{
    /**
     * Uplink only
     */
    public const MODES_UPLINK_ONLY = '0';
    /**
     * Uplink and downlink
     */
    public const MODES_UPLINK_AND_DOWNLINK = 1;
    /**
     * The certificate's mode code
     *
     * @var self::MODES_*[]
     */
    protected ?array $modes = null;
    /**
     * The certificate's input sensitivity
     *
     * @var int
     */
    protected ?int $inputSensitivity = null;
    /**
     * Setter for modes
     *
     * @param self::MODES_*[] $modes The certificate's mode code
     *
     * @return self To use in method chains
     */
    public function setModes(?array $modes) : self
    {
        $this->modes = $modes;
        return $this;
    }
    /**
     * Getter for modes
     *
     * @return self::MODES_*[] The certificate's mode code
     */
    public function getModes() : array
    {
        return $this->modes;
    }
    /**
     * Setter for inputSensitivity
     *
     * @param int $inputSensitivity The certificate's input sensitivity
     *
     * @return self To use in method chains
     */
    public function setInputSensitivity(?int $inputSensitivity) : self
    {
        $this->inputSensitivity = $inputSensitivity;
        return $this;
    }
    /**
     * Getter for inputSensitivity
     *
     * @return int The certificate's input sensitivity
     */
    public function getInputSensitivity() : int
    {
        return $this->inputSensitivity;
    }
}