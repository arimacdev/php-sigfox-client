<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class CellularConnectivityBase extends Definition
{
    /** REMOTE (Configuration provided by Cloud) */
    public const SOURCE_REMOTE = 0;
    /** OTHERS (From shell console and other origins) */
    public const SOURCE_OTHERS = 1;
    /** DEFAULT (Auto-Generated) */
    public const SOURCE_DEFAULT = 2;
    /** TOOLS (Factory, AAT or secure-control) */
    public const SOURCE_TOOLS = 3;
    protected $required = array('apn', 'name');
    /**
     * The name of the configuration
     *
     * @var string
     */
    protected string $name;
    /**
     * The APN used to connect to the base station with this cellular connectivity configuration
     *
     * @var string
     */
    protected string $apn;
    /**
     * The username used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     *
     * @var string
     */
    protected ?string $username = null;
    /**
     * The password used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     *
     * @var string
     */
    protected ?string $password = null;
    /**
     * The PIN used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     *
     * @var string
     */
    protected ?string $pin = null;
    /**
     * Indicates if the cellular connectivity is registered on a roaming network.
     *
     * @var bool
     */
    protected ?bool $roaming = null;
    /**
     * Configuration origin of the connectivity
     * - `CellularConnectivityBase::SOURCE_REMOTE`
     * - `CellularConnectivityBase::SOURCE_OTHERS`
     * - `CellularConnectivityBase::SOURCE_DEFAULT`
     * - `CellularConnectivityBase::SOURCE_TOOLS`
     *
     * @var int
     */
    protected ?int $source = null;
    /**
     * @param string $name The name of the configuration
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The name of the configuration
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param string $apn The APN used to connect to the base station with this cellular connectivity configuration
     */
    function setApn(string $apn)
    {
        $this->apn = $apn;
    }
    /**
     * @return string The APN used to connect to the base station with this cellular connectivity configuration
     */
    function getApn() : string
    {
        return $this->apn;
    }
    /**
     * @param string $username The username used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     */
    function setUsername(?string $username)
    {
        $this->username = $username;
    }
    /**
     * @return string The username used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     */
    function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * @param string $password The password used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     */
    function setPassword(?string $password)
    {
        $this->password = $password;
    }
    /**
     * @return string The password used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     */
    function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * @param string $pin The PIN used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     */
    function setPin(?string $pin)
    {
        $this->pin = $pin;
    }
    /**
     * @return string The PIN used to connect to the base station with this cellular connectivity configuration. This field can be unset by setting the value as an empty string.
     */
    function getPin() : ?string
    {
        return $this->pin;
    }
    /**
     * @param bool $roaming Indicates if the cellular connectivity is registered on a roaming network.
     */
    function setRoaming(?bool $roaming)
    {
        $this->roaming = $roaming;
    }
    /**
     * @return bool Indicates if the cellular connectivity is registered on a roaming network.
     */
    function getRoaming() : ?bool
    {
        return $this->roaming;
    }
    /**
     * @param int $source Configuration origin of the connectivity
     * - `CellularConnectivityBase::SOURCE_REMOTE`
     * - `CellularConnectivityBase::SOURCE_OTHERS`
     * - `CellularConnectivityBase::SOURCE_DEFAULT`
     * - `CellularConnectivityBase::SOURCE_TOOLS`
     */
    function setSource(?int $source)
    {
        $this->source = $source;
    }
    /**
     * @return int Configuration origin of the connectivity
     * - `CellularConnectivityBase::SOURCE_REMOTE`
     * - `CellularConnectivityBase::SOURCE_OTHERS`
     * - `CellularConnectivityBase::SOURCE_DEFAULT`
     * - `CellularConnectivityBase::SOURCE_TOOLS`
     */
    function getSource() : ?int
    {
        return $this->source;
    }
}