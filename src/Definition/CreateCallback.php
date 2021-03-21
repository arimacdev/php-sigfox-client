<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Common information about Callback template
 */
class CreateCallback extends Definition
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
    protected $required = array('callbackSubtype', 'callbackType', 'channel', 'enabled');
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
     * - `CreateCallback::CALLBACK_TYPE_DATA`
     * - `CreateCallback::CALLBACK_TYPE_SERVICE`
     * - `CreateCallback::CALLBACK_TYPE_ERROR`
     *
     * @var int
     */
    protected int $callbackType;
    /**
     * The callback's subtype. The subtype must be valid against its type.
     * - `CreateCallback::CALLBACK_SUBTYPE_STATUS`
     * - `CreateCallback::CALLBACK_SUBTYPE_GEOLOC`
     * - `CreateCallback::CALLBACK_SUBTYPE_UPLINK`
     * - `CreateCallback::CALLBACK_SUBTYPE_BIDIR`
     * - `CreateCallback::CALLBACK_SUBTYPE_ACKNOWLEDGE`
     * - `CreateCallback::CALLBACK_SUBTYPE_REPEATER`
     * - `CreateCallback::CALLBACK_SUBTYPE_DATA_ADVANCED`
     *
     * @var int
     */
    protected int $callbackSubtype;
    /**
     * The custom payload configuration. Only for DATA and DATA_ADVANCED callbacks. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $payloadConfig = null;
    /**
     * True to enable the callback, otherwise false
     *
     * @var bool
     */
    protected bool $enabled;
    /**
     * @param string $channel The callback's channel.
     * - URL
     * - BATCH_URL
     * - EMAIL
     */
    function setChannel(string $channel)
    {
        $this->channel = $channel;
    }
    /**
     * @return string The callback's channel.
     * - URL
     * - BATCH_URL
     * - EMAIL
     */
    function getChannel() : string
    {
        return $this->channel;
    }
    /**
     * @param int $callbackType The callback's type.
     * - `CreateCallback::CALLBACK_TYPE_DATA`
     * - `CreateCallback::CALLBACK_TYPE_SERVICE`
     * - `CreateCallback::CALLBACK_TYPE_ERROR`
     */
    function setCallbackType(int $callbackType)
    {
        $this->callbackType = $callbackType;
    }
    /**
     * @return int The callback's type.
     * - `CreateCallback::CALLBACK_TYPE_DATA`
     * - `CreateCallback::CALLBACK_TYPE_SERVICE`
     * - `CreateCallback::CALLBACK_TYPE_ERROR`
     */
    function getCallbackType() : int
    {
        return $this->callbackType;
    }
    /**
     * @param int $callbackSubtype The callback's subtype. The subtype must be valid against its type.
     * - `CreateCallback::CALLBACK_SUBTYPE_STATUS`
     * - `CreateCallback::CALLBACK_SUBTYPE_GEOLOC`
     * - `CreateCallback::CALLBACK_SUBTYPE_UPLINK`
     * - `CreateCallback::CALLBACK_SUBTYPE_BIDIR`
     * - `CreateCallback::CALLBACK_SUBTYPE_ACKNOWLEDGE`
     * - `CreateCallback::CALLBACK_SUBTYPE_REPEATER`
     * - `CreateCallback::CALLBACK_SUBTYPE_DATA_ADVANCED`
     */
    function setCallbackSubtype(int $callbackSubtype)
    {
        $this->callbackSubtype = $callbackSubtype;
    }
    /**
     * @return int The callback's subtype. The subtype must be valid against its type.
     * - `CreateCallback::CALLBACK_SUBTYPE_STATUS`
     * - `CreateCallback::CALLBACK_SUBTYPE_GEOLOC`
     * - `CreateCallback::CALLBACK_SUBTYPE_UPLINK`
     * - `CreateCallback::CALLBACK_SUBTYPE_BIDIR`
     * - `CreateCallback::CALLBACK_SUBTYPE_ACKNOWLEDGE`
     * - `CreateCallback::CALLBACK_SUBTYPE_REPEATER`
     * - `CreateCallback::CALLBACK_SUBTYPE_DATA_ADVANCED`
     */
    function getCallbackSubtype() : int
    {
        return $this->callbackSubtype;
    }
    /**
     * @param string $payloadConfig The custom payload configuration. Only for DATA and DATA_ADVANCED callbacks. This field can be unset when updating.
     */
    function setPayloadConfig(?string $payloadConfig)
    {
        $this->payloadConfig = $payloadConfig;
    }
    /**
     * @return string The custom payload configuration. Only for DATA and DATA_ADVANCED callbacks. This field can be unset when updating.
     */
    function getPayloadConfig() : ?string
    {
        return $this->payloadConfig;
    }
    /**
     * @param bool $enabled True to enable the callback, otherwise false
     */
    function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }
    /**
     * @return bool True to enable the callback, otherwise false
     */
    function getEnabled() : bool
    {
        return $this->enabled;
    }
}