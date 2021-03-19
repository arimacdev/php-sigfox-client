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
}