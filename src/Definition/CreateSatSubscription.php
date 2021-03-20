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
    protected int $connectionStatus;
    /**
     * The altitude of the satellite of this internet subscription
     *
     * @var int
     */
    protected int $altitude;
    /**
     * The azimuth of the satellite of this internet subscription
     *
     * @var int
     */
    protected int $azimuth;
    /**
     * The polarization of the satellite of this internet subscription
     *
     * @var int
     */
    protected int $polarization;
    /**
     * The order number of this internet subscription
     *
     * @var string
     */
    protected string $orderNumber;
    /**
     * The location code of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $locationCode;
    /**
     * The cluster code of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $clusterCode;
    /**
     * The login of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $login;
    /**
     * The password of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $password;
    /**
     * Subscription receiver type
     * - `CreateSatSubscription::R_TYPE_HEATING`
     * - `CreateSatSubscription::R_TYPE_STANDARD`
     *
     * @var int
     */
    protected int $rType;
    /**
     * @param int connectionStatus Subscription connection status
     * - `CreateSatSubscription::CONNECTION_STATUS_REQUEST`
     * - `CreateSatSubscription::CONNECTION_STATUS_CREDENTIALS_PROVIDED`
     * - `CreateSatSubscription::CONNECTION_STATUS_KIT_RECEIVED`
     */
    function setConnectionStatus(int $connectionStatus)
    {
        $this->connectionStatus = $connectionStatus;
    }
    /**
     * @return int Subscription connection status
     * - `CreateSatSubscription::CONNECTION_STATUS_REQUEST`
     * - `CreateSatSubscription::CONNECTION_STATUS_CREDENTIALS_PROVIDED`
     * - `CreateSatSubscription::CONNECTION_STATUS_KIT_RECEIVED`
     */
    function getConnectionStatus() : int
    {
        return $this->connectionStatus;
    }
    /**
     * @param int altitude The altitude of the satellite of this internet subscription
     */
    function setAltitude(int $altitude)
    {
        $this->altitude = $altitude;
    }
    /**
     * @return int The altitude of the satellite of this internet subscription
     */
    function getAltitude() : int
    {
        return $this->altitude;
    }
    /**
     * @param int azimuth The azimuth of the satellite of this internet subscription
     */
    function setAzimuth(int $azimuth)
    {
        $this->azimuth = $azimuth;
    }
    /**
     * @return int The azimuth of the satellite of this internet subscription
     */
    function getAzimuth() : int
    {
        return $this->azimuth;
    }
    /**
     * @param int polarization The polarization of the satellite of this internet subscription
     */
    function setPolarization(int $polarization)
    {
        $this->polarization = $polarization;
    }
    /**
     * @return int The polarization of the satellite of this internet subscription
     */
    function getPolarization() : int
    {
        return $this->polarization;
    }
    /**
     * @param string orderNumber The order number of this internet subscription
     */
    function setOrderNumber(string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }
    /**
     * @return string The order number of this internet subscription
     */
    function getOrderNumber() : string
    {
        return $this->orderNumber;
    }
    /**
     * @param string locationCode The location code of this internet subscription. This field can be unset when updating.
     */
    function setLocationCode(string $locationCode)
    {
        $this->locationCode = $locationCode;
    }
    /**
     * @return string The location code of this internet subscription. This field can be unset when updating.
     */
    function getLocationCode() : string
    {
        return $this->locationCode;
    }
    /**
     * @param string clusterCode The cluster code of this internet subscription. This field can be unset when updating.
     */
    function setClusterCode(string $clusterCode)
    {
        $this->clusterCode = $clusterCode;
    }
    /**
     * @return string The cluster code of this internet subscription. This field can be unset when updating.
     */
    function getClusterCode() : string
    {
        return $this->clusterCode;
    }
    /**
     * @param string login The login of this internet subscription. This field can be unset when updating.
     */
    function setLogin(string $login)
    {
        $this->login = $login;
    }
    /**
     * @return string The login of this internet subscription. This field can be unset when updating.
     */
    function getLogin() : string
    {
        return $this->login;
    }
    /**
     * @param string password The password of this internet subscription. This field can be unset when updating.
     */
    function setPassword(string $password)
    {
        $this->password = $password;
    }
    /**
     * @return string The password of this internet subscription. This field can be unset when updating.
     */
    function getPassword() : string
    {
        return $this->password;
    }
    /**
     * @param int rType Subscription receiver type
     * - `CreateSatSubscription::R_TYPE_HEATING`
     * - `CreateSatSubscription::R_TYPE_STANDARD`
     */
    function setRType(int $rType)
    {
        $this->rType = $rType;
    }
    /**
     * @return int Subscription receiver type
     * - `CreateSatSubscription::R_TYPE_HEATING`
     * - `CreateSatSubscription::R_TYPE_STANDARD`
     */
    function getRType() : int
    {
        return $this->rType;
    }
}