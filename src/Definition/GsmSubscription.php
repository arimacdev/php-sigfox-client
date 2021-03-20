<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\InternetSubscription;
/**
 * Information about cellular internet subscription
 */
class GsmSubscription extends InternetSubscription
{
    /** DONGLE_USB */
    public const GSM_CONNECTION_TYPE_DONGLE_USB = 0;
    /** ROUTER_ETH */
    public const GSM_CONNECTION_TYPE_ROUTER_ETH = 1;
    /**
     * The data number of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $dataNumber;
    /**
     * The sim card number of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $simCardNumber;
    /**
     * The IMEI of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $imei;
    /**
     * The modem of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $modem;
    /**
     * The serial number of the modem of this internet subscription
     *
     * @var string
     */
    protected string $modemSerialNumber;
    /**
     * GSM subscription connection type
     * - `GsmSubscription::GSM_CONNECTION_TYPE_DONGLE_USB`
     * - `GsmSubscription::GSM_CONNECTION_TYPE_ROUTER_ETH`
     *
     * @var int
     */
    protected int $gsmConnectionType;
    /**
     * @param string dataNumber The data number of this internet subscription. This field can be unset when updating.
     */
    function setDataNumber(string $dataNumber)
    {
        $this->dataNumber = $dataNumber;
    }
    /**
     * @return string The data number of this internet subscription. This field can be unset when updating.
     */
    function getDataNumber() : string
    {
        return $this->dataNumber;
    }
    /**
     * @param string simCardNumber The sim card number of this internet subscription. This field can be unset when updating.
     */
    function setSimCardNumber(string $simCardNumber)
    {
        $this->simCardNumber = $simCardNumber;
    }
    /**
     * @return string The sim card number of this internet subscription. This field can be unset when updating.
     */
    function getSimCardNumber() : string
    {
        return $this->simCardNumber;
    }
    /**
     * @param string imei The IMEI of this internet subscription. This field can be unset when updating.
     */
    function setImei(string $imei)
    {
        $this->imei = $imei;
    }
    /**
     * @return string The IMEI of this internet subscription. This field can be unset when updating.
     */
    function getImei() : string
    {
        return $this->imei;
    }
    /**
     * @param string modem The modem of this internet subscription. This field can be unset when updating.
     */
    function setModem(string $modem)
    {
        $this->modem = $modem;
    }
    /**
     * @return string The modem of this internet subscription. This field can be unset when updating.
     */
    function getModem() : string
    {
        return $this->modem;
    }
    /**
     * @param string modemSerialNumber The serial number of the modem of this internet subscription
     */
    function setModemSerialNumber(string $modemSerialNumber)
    {
        $this->modemSerialNumber = $modemSerialNumber;
    }
    /**
     * @return string The serial number of the modem of this internet subscription
     */
    function getModemSerialNumber() : string
    {
        return $this->modemSerialNumber;
    }
    /**
     * @param int gsmConnectionType GSM subscription connection type
     * - `GsmSubscription::GSM_CONNECTION_TYPE_DONGLE_USB`
     * - `GsmSubscription::GSM_CONNECTION_TYPE_ROUTER_ETH`
     */
    function setGsmConnectionType(int $gsmConnectionType)
    {
        $this->gsmConnectionType = $gsmConnectionType;
    }
    /**
     * @return int GSM subscription connection type
     * - `GsmSubscription::GSM_CONNECTION_TYPE_DONGLE_USB`
     * - `GsmSubscription::GSM_CONNECTION_TYPE_ROUTER_ETH`
     */
    function getGsmConnectionType() : int
    {
        return $this->gsmConnectionType;
    }
}