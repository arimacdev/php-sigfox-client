<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\InternetSubscription;
/**
 * Information about cellular internet subscription
 */
class GsmSubscription extends InternetSubscription
{
    /** DONGLE_USB */
    public const GSM_CONNECTION_TYPE_DONGLE_USB = 0;
    /** ROUTER_ETH */
    public const GSM_CONNECTION_TYPE_ROUTER_ETH = 1;
    /**
     * The data number of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $dataNumber;
    /**
     * The sim card number of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $simCardNumber;
    /**
     * The IMEI of this internet subscription. This field can be unset when updating.
     *
     * @var string
     */
    protected string $imei;
    /**
     * The modem of this internet subscription. This field can be unset when updating.
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
     * GSM subscription connection type
     * - `GsmSubscription::GSM_CONNECTION_TYPE_DONGLE_USB`
     * - `GsmSubscription::GSM_CONNECTION_TYPE_ROUTER_ETH`
     *
     * @var int
     */
    protected int $gsmConnectionType;
}