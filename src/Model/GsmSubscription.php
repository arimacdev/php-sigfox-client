<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Information about cellular internet subscription
 */
class GsmSubscription extends InternetSubscription
{
    /**
     * DONGLE_USB
     */
    public const GSM_CONNECTION_TYPE_DONGLE_USB = 0;
    /**
     * ROUTER_ETH
     */
    public const GSM_CONNECTION_TYPE_ROUTER_ETH = 1;
    /**
     * The data number of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $dataNumber = null;
    /**
     * The sim card number of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $simCardNumber = null;
    /**
     * The IMEI of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $imei = null;
    /**
     * The modem of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $modem = null;
    /**
     * The serial number of the modem of this internet subscription
     *
     * @var string
     */
    protected ?string $modemSerialNumber = null;
    /**
     * GSM subscription connection type
     * 
     * - {@see GsmSubscription::GSM_CONNECTION_TYPE_DONGLE_USB}
     * - {@see GsmSubscription::GSM_CONNECTION_TYPE_ROUTER_ETH}
     *
     * @var int
     */
    protected ?int $gsmConnectionType = null;
    /**
     * Setter for dataNumber
     *
     * @param string $dataNumber The data number of this internet subscription. This field can be unset when
     *                           updating.
     *
     * @return static To use in method chains
     */
    public function setDataNumber(?string $dataNumber)
    {
        $this->dataNumber = $dataNumber;
        return $this;
    }
    /**
     * Getter for dataNumber
     *
     * @return string The data number of this internet subscription. This field can be unset when updating.
     */
    public function getDataNumber() : ?string
    {
        return $this->dataNumber;
    }
    /**
     * Setter for simCardNumber
     *
     * @param string $simCardNumber The sim card number of this internet subscription. This field can be unset when
     *                              updating.
     *
     * @return static To use in method chains
     */
    public function setSimCardNumber(?string $simCardNumber)
    {
        $this->simCardNumber = $simCardNumber;
        return $this;
    }
    /**
     * Getter for simCardNumber
     *
     * @return string The sim card number of this internet subscription. This field can be unset when updating.
     */
    public function getSimCardNumber() : ?string
    {
        return $this->simCardNumber;
    }
    /**
     * Setter for imei
     *
     * @param string $imei The IMEI of this internet subscription. This field can be unset when updating.
     *
     * @return static To use in method chains
     */
    public function setImei(?string $imei)
    {
        $this->imei = $imei;
        return $this;
    }
    /**
     * Getter for imei
     *
     * @return string The IMEI of this internet subscription. This field can be unset when updating.
     */
    public function getImei() : ?string
    {
        return $this->imei;
    }
    /**
     * Setter for modem
     *
     * @param string $modem The modem of this internet subscription. This field can be unset when updating.
     *
     * @return static To use in method chains
     */
    public function setModem(?string $modem)
    {
        $this->modem = $modem;
        return $this;
    }
    /**
     * Getter for modem
     *
     * @return string The modem of this internet subscription. This field can be unset when updating.
     */
    public function getModem() : ?string
    {
        return $this->modem;
    }
    /**
     * Setter for modemSerialNumber
     *
     * @param string $modemSerialNumber The serial number of the modem of this internet subscription
     *
     * @return static To use in method chains
     */
    public function setModemSerialNumber(?string $modemSerialNumber)
    {
        $this->modemSerialNumber = $modemSerialNumber;
        return $this;
    }
    /**
     * Getter for modemSerialNumber
     *
     * @return string The serial number of the modem of this internet subscription
     */
    public function getModemSerialNumber() : ?string
    {
        return $this->modemSerialNumber;
    }
    /**
     * Setter for gsmConnectionType
     *
     * @param int $gsmConnectionType GSM subscription connection type
     *                               
     *                               - {@see GsmSubscription::GSM_CONNECTION_TYPE_DONGLE_USB}
     *                               - {@see GsmSubscription::GSM_CONNECTION_TYPE_ROUTER_ETH}
     *                               
     *
     * @return static To use in method chains
     */
    public function setGsmConnectionType(?int $gsmConnectionType)
    {
        $this->gsmConnectionType = $gsmConnectionType;
        return $this;
    }
    /**
     * Getter for gsmConnectionType
     *
     * @return int GSM subscription connection type
     *             
     *             - {@see GsmSubscription::GSM_CONNECTION_TYPE_DONGLE_USB}
     *             - {@see GsmSubscription::GSM_CONNECTION_TYPE_ROUTER_ETH}
     *             
     */
    public function getGsmConnectionType() : ?int
    {
        return $this->gsmConnectionType;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('dataNumber' => new PrimitiveSerializer('string'), 'simCardNumber' => new PrimitiveSerializer('string'), 'imei' => new PrimitiveSerializer('string'), 'modem' => new PrimitiveSerializer('string'), 'modemSerialNumber' => new PrimitiveSerializer('string'), 'gsmConnectionType' => new PrimitiveSerializer('int'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array();
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}