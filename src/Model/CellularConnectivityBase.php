<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
class CellularConnectivityBase extends Model
{
    /**
     * REMOTE (Configuration provided by Cloud)
     */
    public const SOURCE_REMOTE = 0;
    /**
     * OTHERS (From shell console and other origins)
     */
    public const SOURCE_OTHERS = 1;
    /**
     * DEFAULT (Auto-Generated)
     */
    public const SOURCE_DEFAULT = 2;
    /**
     * TOOLS (Factory, AAT or secure-control)
     */
    public const SOURCE_TOOLS = 3;
    /**
     * The name of the configuration
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The APN used to connect to the base station with this cellular connectivity configuration
     *
     * @var string
     */
    protected ?string $apn = null;
    /**
     * The username used to connect to the base station with this cellular connectivity configuration. This field can
     * be unset by setting the value as an empty string.
     *
     * @var string
     */
    protected ?string $username = null;
    /**
     * The password used to connect to the base station with this cellular connectivity configuration. This field can
     * be unset by setting the value as an empty string.
     *
     * @var string
     */
    protected ?string $password = null;
    /**
     * The PIN used to connect to the base station with this cellular connectivity configuration. This field can be
     * unset by setting the value as an empty string.
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
     * 
     * - {@see CellularConnectivityBase::SOURCE_REMOTE}
     * - {@see CellularConnectivityBase::SOURCE_OTHERS}
     * - {@see CellularConnectivityBase::SOURCE_DEFAULT}
     * - {@see CellularConnectivityBase::SOURCE_TOOLS}
     *
     * @var int
     */
    protected ?int $source = null;
    /**
     * Setter for name
     *
     * @param string $name The name of the configuration
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The name of the configuration
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for apn
     *
     * @param string $apn The APN used to connect to the base station with this cellular connectivity configuration
     *
     * @return static To use in method chains
     */
    public function setApn(?string $apn)
    {
        $this->apn = $apn;
        return $this;
    }
    /**
     * Getter for apn
     *
     * @return string The APN used to connect to the base station with this cellular connectivity configuration
     */
    public function getApn() : ?string
    {
        return $this->apn;
    }
    /**
     * Setter for username
     *
     * @param string $username The username used to connect to the base station with this cellular connectivity
     *                         configuration. This field can be unset by setting the value as an empty string.
     *
     * @return static To use in method chains
     */
    public function setUsername(?string $username)
    {
        $this->username = $username;
        return $this;
    }
    /**
     * Getter for username
     *
     * @return string The username used to connect to the base station with this cellular connectivity configuration.
     *                This field can be unset by setting the value as an empty string.
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * Setter for password
     *
     * @param string $password The password used to connect to the base station with this cellular connectivity
     *                         configuration. This field can be unset by setting the value as an empty string.
     *
     * @return static To use in method chains
     */
    public function setPassword(?string $password)
    {
        $this->password = $password;
        return $this;
    }
    /**
     * Getter for password
     *
     * @return string The password used to connect to the base station with this cellular connectivity configuration.
     *                This field can be unset by setting the value as an empty string.
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * Setter for pin
     *
     * @param string $pin The PIN used to connect to the base station with this cellular connectivity configuration.
     *                    This field can be unset by setting the value as an empty string.
     *
     * @return static To use in method chains
     */
    public function setPin(?string $pin)
    {
        $this->pin = $pin;
        return $this;
    }
    /**
     * Getter for pin
     *
     * @return string The PIN used to connect to the base station with this cellular connectivity configuration. This
     *                field can be unset by setting the value as an empty string.
     */
    public function getPin() : ?string
    {
        return $this->pin;
    }
    /**
     * Setter for roaming
     *
     * @param bool $roaming Indicates if the cellular connectivity is registered on a roaming network.
     *
     * @return static To use in method chains
     */
    public function setRoaming(?bool $roaming)
    {
        $this->roaming = $roaming;
        return $this;
    }
    /**
     * Getter for roaming
     *
     * @return bool Indicates if the cellular connectivity is registered on a roaming network.
     */
    public function getRoaming() : ?bool
    {
        return $this->roaming;
    }
    /**
     * Setter for source
     *
     * @param int $source Configuration origin of the connectivity
     *                    
     *                    - {@see CellularConnectivityBase::SOURCE_REMOTE}
     *                    - {@see CellularConnectivityBase::SOURCE_OTHERS}
     *                    - {@see CellularConnectivityBase::SOURCE_DEFAULT}
     *                    - {@see CellularConnectivityBase::SOURCE_TOOLS}
     *                    
     *
     * @return static To use in method chains
     */
    public function setSource(?int $source)
    {
        $this->source = $source;
        return $this;
    }
    /**
     * Getter for source
     *
     * @return int Configuration origin of the connectivity
     *             
     *             - {@see CellularConnectivityBase::SOURCE_REMOTE}
     *             - {@see CellularConnectivityBase::SOURCE_OTHERS}
     *             - {@see CellularConnectivityBase::SOURCE_DEFAULT}
     *             - {@see CellularConnectivityBase::SOURCE_TOOLS}
     *             
     */
    public function getSource() : ?int
    {
        return $this->source;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('name' => new PrimitiveSerializer('string'), 'apn' => new PrimitiveSerializer('string'), 'username' => new PrimitiveSerializer('string'), 'password' => new PrimitiveSerializer('string'), 'pin' => new PrimitiveSerializer('string'), 'roaming' => new PrimitiveSerializer('bool'), 'source' => new PrimitiveSerializer('int'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('name' => array(new Required()), 'apn' => array(new Required()));
        return $rules;
    }
}