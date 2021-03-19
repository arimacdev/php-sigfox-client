<?php

namespace Arimac\Sigfox\Definition;

/**
 * Common information about Callback template
 */
class CreateCallback
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
     * The callback's channel.
     * - URL
     * - BATCH_URL
     * - EMAIL
     */
    protected ?string $channel;
    /**
     * The callback's type.
     * - `CreateCallback::CALLBACK_TYPE_DATA`
     * - `CreateCallback::CALLBACK_TYPE_SERVICE`
     * - `CreateCallback::CALLBACK_TYPE_ERROR`
     */
    protected ?int $callbackType;
    /**
     * The callback's subtype. The subtype must be valid against its type.
     * - `CreateCallback::CALLBACK_SUBTYPE_STATUS`
     * - `CreateCallback::CALLBACK_SUBTYPE_GEOLOC`
     * - `CreateCallback::CALLBACK_SUBTYPE_UPLINK`
     * - `CreateCallback::CALLBACK_SUBTYPE_BIDIR`
     * - `CreateCallback::CALLBACK_SUBTYPE_ACKNOWLEDGE`
     * - `CreateCallback::CALLBACK_SUBTYPE_REPEATER`
     * - `CreateCallback::CALLBACK_SUBTYPE_DATA_ADVANCED`
     */
    protected ?int $callbackSubtype;
    /**
     * The custom payload configuration. Only for DATA and DATA_ADVANCED callbacks. This field can be unset when updating.
     */
    protected string $payloadConfig;
    /**
     * True to enable the callback, otherwise false
     */
    protected ?bool $enabled;
}