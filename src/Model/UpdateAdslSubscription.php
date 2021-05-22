<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Information about ADSL internet subscription
 */
class UpdateAdslSubscription extends UpdateInternetSubscription
{
    /**
     * REQUEST
     */
    public const CONNECTION_STATUS_REQUEST = 0;
    /**
     * INSTALLED
     */
    public const CONNECTION_STATUS_INSTALLED = 1;
    /**
     * ACTIVATED
     */
    public const CONNECTION_STATUS_ACTIVATED = 2;
    /**
     * Subscription connection status
     * 
     * - {@see UpdateAdslSubscription::CONNECTION_STATUS_REQUEST}
     * - {@see UpdateAdslSubscription::CONNECTION_STATUS_INSTALLED}
     * - {@see UpdateAdslSubscription::CONNECTION_STATUS_ACTIVATED}
     *
     * @var int
     */
    protected ?int $connectionStatus = null;
    /**
     * The internet account of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $internetAccount = null;
    /**
     * The order number of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $orderNumber = null;
    /**
     * The interface login of this internet subscription
     *
     * @var string
     */
    protected ?string $interfaceLogin = null;
    /**
     * The interface password of this internet subscription
     *
     * @var string
     */
    protected ?string $interfacePassword = null;
    /**
     * The adsl login of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $adslLogin = null;
    /**
     * The adsl password of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $adslPassword = null;
    /**
     * The line number of this internet subscription
     *
     * @var string
     */
    protected ?string $lineNumber = null;
    /**
     * The modem of this internet subscription
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
     * The jumper strip of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $jumperStrip = null;
    /**
     * The jumper block of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $jumperBlock = null;
    /**
     * The pair of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $pair = null;
    /**
     * Setter for connectionStatus
     *
     * @param int $connectionStatus Subscription connection status
     *                              
     *                              - {@see UpdateAdslSubscription::CONNECTION_STATUS_REQUEST}
     *                              - {@see UpdateAdslSubscription::CONNECTION_STATUS_INSTALLED}
     *                              - {@see UpdateAdslSubscription::CONNECTION_STATUS_ACTIVATED}
     *                              
     *
     * @return static To use in method chains
     */
    public function setConnectionStatus(?int $connectionStatus)
    {
        $this->connectionStatus = $connectionStatus;
        return $this;
    }
    /**
     * Getter for connectionStatus
     *
     * @return int Subscription connection status
     *             
     *             - {@see UpdateAdslSubscription::CONNECTION_STATUS_REQUEST}
     *             - {@see UpdateAdslSubscription::CONNECTION_STATUS_INSTALLED}
     *             - {@see UpdateAdslSubscription::CONNECTION_STATUS_ACTIVATED}
     *             
     */
    public function getConnectionStatus() : ?int
    {
        return $this->connectionStatus;
    }
    /**
     * Setter for internetAccount
     *
     * @param string $internetAccount The internet account of this internet subscription. This field can be unset
     *                                when updating.
     *
     * @return static To use in method chains
     */
    public function setInternetAccount(?string $internetAccount)
    {
        $this->internetAccount = $internetAccount;
        return $this;
    }
    /**
     * Getter for internetAccount
     *
     * @return string The internet account of this internet subscription. This field can be unset when updating.
     */
    public function getInternetAccount() : ?string
    {
        return $this->internetAccount;
    }
    /**
     * Setter for orderNumber
     *
     * @param string $orderNumber The order number of this internet subscription. This field can be unset when
     *                            updating.
     *
     * @return static To use in method chains
     */
    public function setOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * Getter for orderNumber
     *
     * @return string The order number of this internet subscription. This field can be unset when updating.
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * Setter for interfaceLogin
     *
     * @param string $interfaceLogin The interface login of this internet subscription
     *
     * @return static To use in method chains
     */
    public function setInterfaceLogin(?string $interfaceLogin)
    {
        $this->interfaceLogin = $interfaceLogin;
        return $this;
    }
    /**
     * Getter for interfaceLogin
     *
     * @return string The interface login of this internet subscription
     */
    public function getInterfaceLogin() : ?string
    {
        return $this->interfaceLogin;
    }
    /**
     * Setter for interfacePassword
     *
     * @param string $interfacePassword The interface password of this internet subscription
     *
     * @return static To use in method chains
     */
    public function setInterfacePassword(?string $interfacePassword)
    {
        $this->interfacePassword = $interfacePassword;
        return $this;
    }
    /**
     * Getter for interfacePassword
     *
     * @return string The interface password of this internet subscription
     */
    public function getInterfacePassword() : ?string
    {
        return $this->interfacePassword;
    }
    /**
     * Setter for adslLogin
     *
     * @param string $adslLogin The adsl login of this internet subscription. This field can be unset when updating.
     *
     * @return static To use in method chains
     */
    public function setAdslLogin(?string $adslLogin)
    {
        $this->adslLogin = $adslLogin;
        return $this;
    }
    /**
     * Getter for adslLogin
     *
     * @return string The adsl login of this internet subscription. This field can be unset when updating.
     */
    public function getAdslLogin() : ?string
    {
        return $this->adslLogin;
    }
    /**
     * Setter for adslPassword
     *
     * @param string $adslPassword The adsl password of this internet subscription. This field can be unset when
     *                             updating.
     *
     * @return static To use in method chains
     */
    public function setAdslPassword(?string $adslPassword)
    {
        $this->adslPassword = $adslPassword;
        return $this;
    }
    /**
     * Getter for adslPassword
     *
     * @return string The adsl password of this internet subscription. This field can be unset when updating.
     */
    public function getAdslPassword() : ?string
    {
        return $this->adslPassword;
    }
    /**
     * Setter for lineNumber
     *
     * @param string $lineNumber The line number of this internet subscription
     *
     * @return static To use in method chains
     */
    public function setLineNumber(?string $lineNumber)
    {
        $this->lineNumber = $lineNumber;
        return $this;
    }
    /**
     * Getter for lineNumber
     *
     * @return string The line number of this internet subscription
     */
    public function getLineNumber() : ?string
    {
        return $this->lineNumber;
    }
    /**
     * Setter for modem
     *
     * @param string $modem The modem of this internet subscription
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
     * @return string The modem of this internet subscription
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
     * Setter for jumperStrip
     *
     * @param string $jumperStrip The jumper strip of this internet subscription. This field can be unset when
     *                            updating.
     *
     * @return static To use in method chains
     */
    public function setJumperStrip(?string $jumperStrip)
    {
        $this->jumperStrip = $jumperStrip;
        return $this;
    }
    /**
     * Getter for jumperStrip
     *
     * @return string The jumper strip of this internet subscription. This field can be unset when updating.
     */
    public function getJumperStrip() : ?string
    {
        return $this->jumperStrip;
    }
    /**
     * Setter for jumperBlock
     *
     * @param string $jumperBlock The jumper block of this internet subscription. This field can be unset when
     *                            updating.
     *
     * @return static To use in method chains
     */
    public function setJumperBlock(?string $jumperBlock)
    {
        $this->jumperBlock = $jumperBlock;
        return $this;
    }
    /**
     * Getter for jumperBlock
     *
     * @return string The jumper block of this internet subscription. This field can be unset when updating.
     */
    public function getJumperBlock() : ?string
    {
        return $this->jumperBlock;
    }
    /**
     * Setter for pair
     *
     * @param string $pair The pair of this internet subscription. This field can be unset when updating.
     *
     * @return static To use in method chains
     */
    public function setPair(?string $pair)
    {
        $this->pair = $pair;
        return $this;
    }
    /**
     * Getter for pair
     *
     * @return string The pair of this internet subscription. This field can be unset when updating.
     */
    public function getPair() : ?string
    {
        return $this->pair;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('connectionStatus' => new PrimitiveSerializer('int'), 'internetAccount' => new PrimitiveSerializer('string'), 'orderNumber' => new PrimitiveSerializer('string'), 'interfaceLogin' => new PrimitiveSerializer('string'), 'interfacePassword' => new PrimitiveSerializer('string'), 'adslLogin' => new PrimitiveSerializer('string'), 'adslPassword' => new PrimitiveSerializer('string'), 'lineNumber' => new PrimitiveSerializer('string'), 'modem' => new PrimitiveSerializer('string'), 'modemSerialNumber' => new PrimitiveSerializer('string'), 'jumperStrip' => new PrimitiveSerializer('string'), 'jumperBlock' => new PrimitiveSerializer('string'), 'pair' => new PrimitiveSerializer('string'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}