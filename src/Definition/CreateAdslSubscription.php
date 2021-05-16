<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Information about ADSL internet subscription
 */
class CreateAdslSubscription extends CreateInternetSubscription
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
     * - {@see CreateAdslSubscription::CONNECTION_STATUS_REQUEST}
     * - {@see CreateAdslSubscription::CONNECTION_STATUS_INSTALLED}
     * - {@see CreateAdslSubscription::CONNECTION_STATUS_ACTIVATED}
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
     * @internal
     */
    protected array $validations = array('connectionStatus' => array('required'), 'interfaceLogin' => array('required'), 'interfacePassword' => array('required'), 'modem' => array('required'));
    /**
     * Setter for connectionStatus
     *
     * @param int $connectionStatus Subscription connection status
     *                              
     *                              - {@see CreateAdslSubscription::CONNECTION_STATUS_REQUEST}
     *                              - {@see CreateAdslSubscription::CONNECTION_STATUS_INSTALLED}
     *                              - {@see CreateAdslSubscription::CONNECTION_STATUS_ACTIVATED}
     *                              
     *
     * @return self To use in method chains
     */
    public function setConnectionStatus(?int $connectionStatus) : self
    {
        $this->connectionStatus = $connectionStatus;
        return $this;
    }
    /**
     * Getter for connectionStatus
     *
     * @return int Subscription connection status
     *             
     *             - {@see CreateAdslSubscription::CONNECTION_STATUS_REQUEST}
     *             - {@see CreateAdslSubscription::CONNECTION_STATUS_INSTALLED}
     *             - {@see CreateAdslSubscription::CONNECTION_STATUS_ACTIVATED}
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
     * @return self To use in method chains
     */
    public function setInternetAccount(?string $internetAccount) : self
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
     * @return self To use in method chains
     */
    public function setOrderNumber(?string $orderNumber) : self
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
     * @return self To use in method chains
     */
    public function setInterfaceLogin(?string $interfaceLogin) : self
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
     * @return self To use in method chains
     */
    public function setInterfacePassword(?string $interfacePassword) : self
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
     * @return self To use in method chains
     */
    public function setAdslLogin(?string $adslLogin) : self
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
     * @return self To use in method chains
     */
    public function setAdslPassword(?string $adslPassword) : self
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
     * @return self To use in method chains
     */
    public function setLineNumber(?string $lineNumber) : self
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
     * @return self To use in method chains
     */
    public function setModem(?string $modem) : self
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
     * @return self To use in method chains
     */
    public function setModemSerialNumber(?string $modemSerialNumber) : self
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
     * @return self To use in method chains
     */
    public function setJumperStrip(?string $jumperStrip) : self
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
     * @return self To use in method chains
     */
    public function setJumperBlock(?string $jumperBlock) : self
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
     * @return self To use in method chains
     */
    public function setPair(?string $pair) : self
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
        return array('connectionStatus' => new PrimitiveSerializer(self::class, 'connectionStatus', 'int'), 'internetAccount' => new PrimitiveSerializer(self::class, 'internetAccount', 'string'), 'orderNumber' => new PrimitiveSerializer(self::class, 'orderNumber', 'string'), 'interfaceLogin' => new PrimitiveSerializer(self::class, 'interfaceLogin', 'string'), 'interfacePassword' => new PrimitiveSerializer(self::class, 'interfacePassword', 'string'), 'adslLogin' => new PrimitiveSerializer(self::class, 'adslLogin', 'string'), 'adslPassword' => new PrimitiveSerializer(self::class, 'adslPassword', 'string'), 'lineNumber' => new PrimitiveSerializer(self::class, 'lineNumber', 'string'), 'modem' => new PrimitiveSerializer(self::class, 'modem', 'string'), 'modemSerialNumber' => new PrimitiveSerializer(self::class, 'modemSerialNumber', 'string'), 'jumperStrip' => new PrimitiveSerializer(self::class, 'jumperStrip', 'string'), 'jumperBlock' => new PrimitiveSerializer(self::class, 'jumperBlock', 'string'), 'pair' => new PrimitiveSerializer(self::class, 'pair', 'string'));
    }
}