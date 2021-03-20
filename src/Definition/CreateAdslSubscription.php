<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CreateInternetSubscription;
/**
 * Information about ADSL internet subscription
 */
class CreateAdslSubscription extends CreateInternetSubscription
{
    /** REQUEST */
    public const CONNECTION_STATUS_REQUEST = 0;
    /** INSTALLED */
    public const CONNECTION_STATUS_INSTALLED = 1;
    /** ACTIVATED */
    public const CONNECTION_STATUS_ACTIVATED = 2;
    /**
     * Subscription connection status
     * - `CreateAdslSubscription::CONNECTION_STATUS_REQUEST`
     * - `CreateAdslSubscription::CONNECTION_STATUS_INSTALLED`
     * - `CreateAdslSubscription::CONNECTION_STATUS_ACTIVATED`
     *
     * @var int
     */
    protected int $connectionStatus;
    /**
     * The internet account of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $internetAccount;
    /**
     * The order number of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $orderNumber;
    /**
     * The interface login of this internet subscription
     *
     * @var string
     */
    protected string $interfaceLogin;
    /**
     * The interface password of this internet subscription
     *
     * @var string
     */
    protected string $interfacePassword;
    /**
     * The adsl login of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $adslLogin;
    /**
     * The adsl password of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $adslPassword;
    /**
     * The line number of this internet subscription
     *
     * @var string
     */
    protected string $lineNumber;
    /**
     * The modem of this internet subscription
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
     * The jumper strip of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $jumperStrip;
    /**
     * The jumper block of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $jumperBlock;
    /**
     * The pair of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $pair;
    /**
     * @param int connectionStatus Subscription connection status
     * - `CreateAdslSubscription::CONNECTION_STATUS_REQUEST`
     * - `CreateAdslSubscription::CONNECTION_STATUS_INSTALLED`
     * - `CreateAdslSubscription::CONNECTION_STATUS_ACTIVATED`
     */
    function setConnectionStatus(int $connectionStatus)
    {
        $this->connectionStatus = $connectionStatus;
    }
    /**
     * @return int Subscription connection status
     * - `CreateAdslSubscription::CONNECTION_STATUS_REQUEST`
     * - `CreateAdslSubscription::CONNECTION_STATUS_INSTALLED`
     * - `CreateAdslSubscription::CONNECTION_STATUS_ACTIVATED`
     */
    function getConnectionStatus() : int
    {
        return $this->connectionStatus;
    }
    /**
     * @param string internetAccount The internet account of this internet subscription. This field can be unset when updating.
     */
    function setInternetAccount(string $internetAccount)
    {
        $this->internetAccount = $internetAccount;
    }
    /**
     * @return string The internet account of this internet subscription. This field can be unset when updating.
     */
    function getInternetAccount() : string
    {
        return $this->internetAccount;
    }
    /**
     * @param string orderNumber The order number of this internet subscription. This field can be unset when updating.
     */
    function setOrderNumber(string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }
    /**
     * @return string The order number of this internet subscription. This field can be unset when updating.
     */
    function getOrderNumber() : string
    {
        return $this->orderNumber;
    }
    /**
     * @param string interfaceLogin The interface login of this internet subscription
     */
    function setInterfaceLogin(string $interfaceLogin)
    {
        $this->interfaceLogin = $interfaceLogin;
    }
    /**
     * @return string The interface login of this internet subscription
     */
    function getInterfaceLogin() : string
    {
        return $this->interfaceLogin;
    }
    /**
     * @param string interfacePassword The interface password of this internet subscription
     */
    function setInterfacePassword(string $interfacePassword)
    {
        $this->interfacePassword = $interfacePassword;
    }
    /**
     * @return string The interface password of this internet subscription
     */
    function getInterfacePassword() : string
    {
        return $this->interfacePassword;
    }
    /**
     * @param string adslLogin The adsl login of this internet subscription. This field can be unset when updating.
     */
    function setAdslLogin(string $adslLogin)
    {
        $this->adslLogin = $adslLogin;
    }
    /**
     * @return string The adsl login of this internet subscription. This field can be unset when updating.
     */
    function getAdslLogin() : string
    {
        return $this->adslLogin;
    }
    /**
     * @param string adslPassword The adsl password of this internet subscription. This field can be unset when updating.
     */
    function setAdslPassword(string $adslPassword)
    {
        $this->adslPassword = $adslPassword;
    }
    /**
     * @return string The adsl password of this internet subscription. This field can be unset when updating.
     */
    function getAdslPassword() : string
    {
        return $this->adslPassword;
    }
    /**
     * @param string lineNumber The line number of this internet subscription
     */
    function setLineNumber(string $lineNumber)
    {
        $this->lineNumber = $lineNumber;
    }
    /**
     * @return string The line number of this internet subscription
     */
    function getLineNumber() : string
    {
        return $this->lineNumber;
    }
    /**
     * @param string modem The modem of this internet subscription
     */
    function setModem(string $modem)
    {
        $this->modem = $modem;
    }
    /**
     * @return string The modem of this internet subscription
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
     * @param string jumperStrip The jumper strip of this internet subscription. This field can be unset when updating.
     */
    function setJumperStrip(string $jumperStrip)
    {
        $this->jumperStrip = $jumperStrip;
    }
    /**
     * @return string The jumper strip of this internet subscription. This field can be unset when updating.
     */
    function getJumperStrip() : string
    {
        return $this->jumperStrip;
    }
    /**
     * @param string jumperBlock The jumper block of this internet subscription. This field can be unset when updating.
     */
    function setJumperBlock(string $jumperBlock)
    {
        $this->jumperBlock = $jumperBlock;
    }
    /**
     * @return string The jumper block of this internet subscription. This field can be unset when updating.
     */
    function getJumperBlock() : string
    {
        return $this->jumperBlock;
    }
    /**
     * @param string pair The pair of this internet subscription. This field can be unset when updating.
     */
    function setPair(string $pair)
    {
        $this->pair = $pair;
    }
    /**
     * @return string The pair of this internet subscription. This field can be unset when updating.
     */
    function getPair() : string
    {
        return $this->pair;
    }
}