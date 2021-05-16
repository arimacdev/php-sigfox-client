<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
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
     * - {@see RadioCertificate::MODES_UPLINK_ONLY}
     * - {@see RadioCertificate::MODES_UPLINK_AND_DOWNLINK}
     *
     * @var int[]
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
     * @param int[] $modes The certificate's mode code
     *                     
     *                     - {@see RadioCertificate::MODES_UPLINK_ONLY}
     *                     - {@see RadioCertificate::MODES_UPLINK_AND_DOWNLINK}
     *                     
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
     * @return int[] The certificate's mode code
     *               
     *               - {@see RadioCertificate::MODES_UPLINK_ONLY}
     *               - {@see RadioCertificate::MODES_UPLINK_AND_DOWNLINK}
     *               
     */
    public function getModes() : ?array
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
    public function getInputSensitivity() : ?int
    {
        return $this->inputSensitivity;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('modes' => new ArraySerializer(self::class, 'modes', new PrimitiveSerializer(self::class, 'modes', 'int')), 'inputSensitivity' => new PrimitiveSerializer(self::class, 'inputSensitivity', 'int'));
    }
}