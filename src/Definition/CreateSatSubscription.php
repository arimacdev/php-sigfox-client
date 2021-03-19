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
}