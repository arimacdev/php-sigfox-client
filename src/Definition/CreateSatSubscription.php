<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CreateInternetSubscription;
/**
 * Information about satellite internet subscription
 */
class CreateSatSubscription extends CreateInternetSubscription
{
    /** REQUEST */
    public const CONNECTION_STATUS_REQUEST = 0;
    /** CREDENTIALS PROVIDED */
    public const CONNECTION_STATUS_CREDENTIALS_PROVIDED = 1;
    /** KIT RECEIVED */
    public const CONNECTION_STATUS_KIT_RECEIVED = 2;
    /** HEATING */
    public const R_TYPE_HEATING = 0;
    /** STANDARD */
    public const R_TYPE_STANDARD = 1;
    /**
     * Subscription connection status
     * - `CreateSatSubscription::CONNECTION_STATUS_REQUEST`
     * - `CreateSatSubscription::CONNECTION_STATUS_CREDENTIALS_PROVIDED`
     * - `CreateSatSubscription::CONNECTION_STATUS_KIT_RECEIVED`
     *
     * @var int
     */
    protected ?int $connectionStatus = null;
    /**
     * The altitude of the satellite of this internet subscription
     *
     * @var float
     */
    protected ?float $altitude = null;
    /**
     * The azimuth of the satellite of this internet subscription
     *
     * @var float
     */
    protected ?float $azimuth = null;
    /**
     * The polarization of the satellite of this internet subscription
     *
     * @var float
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
     * Subscription receiver type
     * - `CreateSatSubscription::R_TYPE_HEATING`
     * - `CreateSatSubscription::R_TYPE_STANDARD`
     *
     * @var int
     */
    protected ?int $rType = null;
    /**
     * @param int $connectionStatus Subscription connection status
     * - `CreateSatSubscription::CONNECTION_STATUS_REQUEST`
     * - `CreateSatSubscription::CONNECTION_STATUS_CREDENTIALS_PROVIDED`
     * - `CreateSatSubscription::CONNECTION_STATUS_KIT_RECEIVED`
     */
    function setConnectionStatus(?int $connectionStatus)
    {
        $this->connectionStatus = $connectionStatus;
    }
    /**
     * @return int Subscription connection status
     * - `CreateSatSubscription::CONNECTION_STATUS_REQUEST`
     * - `CreateSatSubscription::CONNECTION_STATUS_CREDENTIALS_PROVIDED`
     * - `CreateSatSubscription::CONNECTION_STATUS_KIT_RECEIVED`
     */
    function getConnectionStatus() : ?int
    {
        return $this->connectionStatus;
    }
    /**
     * @param float $altitude The altitude of the satellite of this internet subscription
     */
    function setAltitude(?float $altitude)
    {
        $this->altitude = $altitude;
    }
    /**
     * @return float The altitude of the satellite of this internet subscription
     */
    function getAltitude() : ?float
    {
        return $this->altitude;
    }
    /**
     * @param float $azimuth The azimuth of the satellite of this internet subscription
     */
    function setAzimuth(?float $azimuth)
    {
        $this->azimuth = $azimuth;
    }
    /**
     * @return float The azimuth of the satellite of this internet subscription
     */
    function getAzimuth() : ?float
    {
        return $this->azimuth;
    }
    /**
     * @param float $polarization The polarization of the satellite of this internet subscription
     */
    function setPolarization(?float $polarization)
    {
        $this->polarization = $polarization;
    }
    /**
     * @return float The polarization of the satellite of this internet subscription
     */
    function getPolarization() : ?float
    {
        return $this->polarization;
    }
    /**
     * @param string $orderNumber The order number of this internet subscription
     */
    function setOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }
    /**
     * @return string The order number of this internet subscription
     */
    function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * @param string $locationCode The location code of this internet subscription. This field can be unset when updating.
     */
    function setLocationCode(?string $locationCode)
    {
        $this->locationCode = $locationCode;
    }
    /**
     * @return string The location code of this internet subscription. This field can be unset when updating.
     */
    function getLocationCode() : ?string
    {
        return $this->locationCode;
    }
    /**
     * @param string $clusterCode The cluster code of this internet subscription. This field can be unset when updating.
     */
    function setClusterCode(?string $clusterCode)
    {
        $this->clusterCode = $clusterCode;
    }
    /**
     * @return string The cluster code of this internet subscription. This field can be unset when updating.
     */
    function getClusterCode() : ?string
    {
        return $this->clusterCode;
    }
    /**
     * @param string $login The login of this internet subscription. This field can be unset when updating.
     */
    function setLogin(?string $login)
    {
        $this->login = $login;
    }
    /**
     * @return string The login of this internet subscription. This field can be unset when updating.
     */
    function getLogin() : ?string
    {
        return $this->login;
    }
    /**
     * @param string $password The password of this internet subscription. This field can be unset when updating.
     */
    function setPassword(?string $password)
    {
        $this->password = $password;
    }
    /**
     * @return string The password of this internet subscription. This field can be unset when updating.
     */
    function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * @param int $rType Subscription receiver type
     * - `CreateSatSubscription::R_TYPE_HEATING`
     * - `CreateSatSubscription::R_TYPE_STANDARD`
     */
    function setRType(?int $rType)
    {
        $this->rType = $rType;
    }
    /**
     * @return int Subscription receiver type
     * - `CreateSatSubscription::R_TYPE_HEATING`
     * - `CreateSatSubscription::R_TYPE_STANDARD`
     */
    function getRType() : ?int
    {
        return $this->rType;
    }
}