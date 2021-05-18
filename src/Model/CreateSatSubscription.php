<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
/**
 * Information about satellite internet subscription
 */
class CreateSatSubscription extends CreateInternetSubscription
{
    /**
     * REQUEST
     */
    public const CONNECTION_STATUS_REQUEST = 0;
    /**
     * CREDENTIALS PROVIDED
     */
    public const CONNECTION_STATUS_CREDENTIALS_PROVIDED = 1;
    /**
     * KIT RECEIVED
     */
    public const CONNECTION_STATUS_KIT_RECEIVED = 2;
    /**
     * HEATING
     */
    public const R_TYPE_HEATING = 0;
    /**
     * Subscription receiver type
     */
    public const R_TYPE_STANDARD = 1;
    /**
     * Subscription connection status
     * 
     * - {@see CreateSatSubscription::CONNECTION_STATUS_REQUEST}
     * - {@see CreateSatSubscription::CONNECTION_STATUS_CREDENTIALS_PROVIDED}
     * - {@see CreateSatSubscription::CONNECTION_STATUS_KIT_RECEIVED}
     *
     * @var int
     */
    protected ?int $connectionStatus = null;
    /**
     * The altitude of the satellite of this internet subscription
     *
     * @var double
     */
    protected ?float $altitude = null;
    /**
     * The azimuth of the satellite of this internet subscription
     *
     * @var double
     */
    protected ?float $azimuth = null;
    /**
     * The polarization of the satellite of this internet subscription
     *
     * @var double
     */
    protected ?float $polarization = null;
    /**
     * The order number of this internet subscription
     *
     * @var string
     */
    protected ?string $orderNumber = null;
    /**
     * The location code of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $locationCode = null;
    /**
     * The cluster code of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $clusterCode = null;
    /**
     * The login of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $login = null;
    /**
     * The password of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $password = null;
    /**
     * - {@see CreateSatSubscription::R_TYPE_HEATING}
     * - {@see CreateSatSubscription::R_TYPE_STANDARD}
     *
     * @var int
     */
    protected ?int $rType = null;
    /**
     * Setter for connectionStatus
     *
     * @param int $connectionStatus Subscription connection status
     *                              
     *                              - {@see CreateSatSubscription::CONNECTION_STATUS_REQUEST}
     *                              - {@see CreateSatSubscription::CONNECTION_STATUS_CREDENTIALS_PROVIDED}
     *                              - {@see CreateSatSubscription::CONNECTION_STATUS_KIT_RECEIVED}
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
     *             - {@see CreateSatSubscription::CONNECTION_STATUS_REQUEST}
     *             - {@see CreateSatSubscription::CONNECTION_STATUS_CREDENTIALS_PROVIDED}
     *             - {@see CreateSatSubscription::CONNECTION_STATUS_KIT_RECEIVED}
     *             
     */
    public function getConnectionStatus() : ?int
    {
        return $this->connectionStatus;
    }
    /**
     * Setter for altitude
     *
     * @param double $altitude The altitude of the satellite of this internet subscription
     *
     * @return self To use in method chains
     */
    public function setAltitude(?float $altitude) : self
    {
        $this->altitude = $altitude;
        return $this;
    }
    /**
     * Getter for altitude
     *
     * @return double The altitude of the satellite of this internet subscription
     */
    public function getAltitude() : ?float
    {
        return $this->altitude;
    }
    /**
     * Setter for azimuth
     *
     * @param double $azimuth The azimuth of the satellite of this internet subscription
     *
     * @return self To use in method chains
     */
    public function setAzimuth(?float $azimuth) : self
    {
        $this->azimuth = $azimuth;
        return $this;
    }
    /**
     * Getter for azimuth
     *
     * @return double The azimuth of the satellite of this internet subscription
     */
    public function getAzimuth() : ?float
    {
        return $this->azimuth;
    }
    /**
     * Setter for polarization
     *
     * @param double $polarization The polarization of the satellite of this internet subscription
     *
     * @return self To use in method chains
     */
    public function setPolarization(?float $polarization) : self
    {
        $this->polarization = $polarization;
        return $this;
    }
    /**
     * Getter for polarization
     *
     * @return double The polarization of the satellite of this internet subscription
     */
    public function getPolarization() : ?float
    {
        return $this->polarization;
    }
    /**
     * Setter for orderNumber
     *
     * @param string $orderNumber The order number of this internet subscription
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
     * @return string The order number of this internet subscription
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * Setter for locationCode
     *
     * @param string $locationCode The location code of this internet subscription. This field can be unset when
     *                             updating.
     *
     * @return self To use in method chains
     */
    public function setLocationCode(?string $locationCode) : self
    {
        $this->locationCode = $locationCode;
        return $this;
    }
    /**
     * Getter for locationCode
     *
     * @return string The location code of this internet subscription. This field can be unset when updating.
     */
    public function getLocationCode() : ?string
    {
        return $this->locationCode;
    }
    /**
     * Setter for clusterCode
     *
     * @param string $clusterCode The cluster code of this internet subscription. This field can be unset when
     *                            updating.
     *
     * @return self To use in method chains
     */
    public function setClusterCode(?string $clusterCode) : self
    {
        $this->clusterCode = $clusterCode;
        return $this;
    }
    /**
     * Getter for clusterCode
     *
     * @return string The cluster code of this internet subscription. This field can be unset when updating.
     */
    public function getClusterCode() : ?string
    {
        return $this->clusterCode;
    }
    /**
     * Setter for login
     *
     * @param string $login The login of this internet subscription. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setLogin(?string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * Getter for login
     *
     * @return string The login of this internet subscription. This field can be unset when updating.
     */
    public function getLogin() : ?string
    {
        return $this->login;
    }
    /**
     * Setter for password
     *
     * @param string $password The password of this internet subscription. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setPassword(?string $password) : self
    {
        $this->password = $password;
        return $this;
    }
    /**
     * Getter for password
     *
     * @return string The password of this internet subscription. This field can be unset when updating.
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * Setter for rType
     *
     * @param int $rType 
     *                   - {@see CreateSatSubscription::R_TYPE_HEATING}
     *                   - {@see CreateSatSubscription::R_TYPE_STANDARD}
     *                   
     *
     * @return self To use in method chains
     */
    public function setRType(?int $rType) : self
    {
        $this->rType = $rType;
        return $this;
    }
    /**
     * Getter for rType
     *
     * @return int 
     *             - {@see CreateSatSubscription::R_TYPE_HEATING}
     *             - {@see CreateSatSubscription::R_TYPE_STANDARD}
     *             
     */
    public function getRType() : ?int
    {
        return $this->rType;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('connectionStatus' => new PrimitiveSerializer('int'), 'altitude' => new PrimitiveSerializer('double'), 'azimuth' => new PrimitiveSerializer('double'), 'polarization' => new PrimitiveSerializer('double'), 'orderNumber' => new PrimitiveSerializer('string'), 'locationCode' => new PrimitiveSerializer('string'), 'clusterCode' => new PrimitiveSerializer('string'), 'login' => new PrimitiveSerializer('string'), 'password' => new PrimitiveSerializer('string'), 'rType' => new PrimitiveSerializer('int'));
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
        $rules = array('connectionStatus' => array(new Required()), 'orderNumber' => array(new Required()), 'rType' => array(new Required()));
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}