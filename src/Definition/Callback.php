<?php

namespace Arimac\Sigfox\Definition;

/**
 * Common information about Callback template
 */
class Callback
{
    /** DATA callback delivering uplink messages to a customer platform. */
    public const CALLBACK_TYPE_DATA = 0;
    /** SERVICE callback to enable additional services (see subtypes). */
    public const CALLBACK_TYPE_SERVICE = 1;
    /** ERROR callback to ease troubleshooting in case of communication failure. */
    public const CALLBACK_TYPE_ERROR = 2;
    /** STATUS callback sending information about the status of a device (available for SERVICE callbacks) */
    public const CALLBACK_SUBTYPE_STATUS = 0;
    /** GEOLOC callback is deprecated and can no be longer be created or edited. This callback is in a read only state to allow for migration to a DATA_ADVANCED callback */
    public const CALLBACK_SUBTYPE_GEOLOC = 1;
    /** UPLINK callback for an uplink message (available for DATA callbacks) */
    public const CALLBACK_SUBTYPE_UPLINK = 2;
    /** BIDIR callback for a bidirectional message (available for DATA callbacks) */
    public const CALLBACK_SUBTYPE_BIDIR = 3;
    /** ACKNOWLEDGE callback sent on a downlink acknowledged message (available for SERVICE callbacks) */
    public const CALLBACK_SUBTYPE_ACKNOWLEDGE = 4;
    /** REPEATER callback triggered when a repeater sends an OOB (available for SERVICE callbacks) */
    public const CALLBACK_SUBTYPE_REPEATER = 5;
    /** DATA_ADVANCED callback sent on a message that can be geolocated (available for SERVICE callbacks) */
    public const CALLBACK_SUBTYPE_DATA_ADVANCED = 6;
    /**
     * The callback's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The callback's channel.
     * - URL
     * - BATCH_URL
     * - EMAIL
     *
     * @var string
     */
    protected string $channel;
    /**
     * The callback's type.
     * - `Callback::CALLBACK_TYPE_DATA`
     * - `Callback::CALLBACK_TYPE_SERVICE`
     * - `Callback::CALLBACK_TYPE_ERROR`
     *
     * @var int
     */
    protected int $callbackType;
    /**
     * The callback's subtype. The subtype must be valid against its type.
     * - `Callback::CALLBACK_SUBTYPE_STATUS`
     * - `Callback::CALLBACK_SUBTYPE_GEOLOC`
     * - `Callback::CALLBACK_SUBTYPE_UPLINK`
     * - `Callback::CALLBACK_SUBTYPE_BIDIR`
     * - `Callback::CALLBACK_SUBTYPE_ACKNOWLEDGE`
     * - `Callback::CALLBACK_SUBTYPE_REPEATER`
     * - `Callback::CALLBACK_SUBTYPE_DATA_ADVANCED`
     *
     * @var int
     */
    protected int $callbackSubtype;
    /**
     * The custom payload configuration. Only for DATA callbacks. This field can be unset when updating.
     *
     * @var string
     */
    protected string $payloadConfig;
    /**
     * True to enable the callback, otherwise false
     *
     * @var bool
     */
    protected bool $enabled;
    /**
     * True if last use of the callback fails, otherwise false
     *
     * @var bool
     */
    protected bool $dead;
}