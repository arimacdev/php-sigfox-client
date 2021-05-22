<?php

namespace Arimac\Sigfox\Model;

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
     * @return static To use in method chains
     */
    public function setModes(?array $modes)
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
     * @return static To use in method chains
     */
    public function setInputSensitivity(?int $inputSensitivity)
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
        $serializers = array('modes' => new ArraySerializer(new PrimitiveSerializer('int')), 'inputSensitivity' => new PrimitiveSerializer('int'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}