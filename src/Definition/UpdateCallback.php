<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Common information about Callback template
 */
class UpdateCallback extends Definition
{
    /**
     * DATA callback delivering uplink messages to a customer platform.
     */
    public const CALLBACK_TYPE_DATA = 0;
    /**
     * SERVICE callback to enable additional services (see subtypes).
     */
    public const CALLBACK_TYPE_SERVICE = 1;
    /**
     * ERROR callback to ease troubleshooting in case of communication failure.
     */
    public const CALLBACK_TYPE_ERROR = 2;
    /**
     * STATUS callback sending information about the status of a device (available for SERVICE callbacks)
     */
    public const CALLBACK_SUBTYPE_STATUS = 0;
    /**
     * GEOLOC callback is deprecated and can no be longer be created or edited. This callback is in a read only state
     * to allow for migration to a DATA_ADVANCED callback
     */
    public const CALLBACK_SUBTYPE_GEOLOC = 1;
    /**
     * UPLINK callback for an uplink message (available for DATA callbacks)
     */
    public const CALLBACK_SUBTYPE_UPLINK = 2;
    /**
     * BIDIR callback for a bidirectional message (available for DATA callbacks)
     */
    public const CALLBACK_SUBTYPE_BIDIR = 3;
    /**
     * ACKNOWLEDGE callback sent on a downlink acknowledged message (available for SERVICE callbacks)
     */
    public const CALLBACK_SUBTYPE_ACKNOWLEDGE = 4;
    /**
     * REPEATER callback triggered when a repeater sends an OOB (available for SERVICE callbacks)
     */
    public const CALLBACK_SUBTYPE_REPEATER = 5;
    /**
     * DATA_ADVANCED callback sent on a message that can be geolocated (available for SERVICE callbacks)
     */
    public const CALLBACK_SUBTYPE_DATA_ADVANCED = 6;
    /**
     * The callback's channel.
     * - URL
     * - BATCH_URL
     * - EMAIL
     * 
     *
     * @var string
     */
    protected ?string $channel = null;
    /**
     * The callback's type.
     *
     * @var self::CALLBACK_TYPE_*
     */
    protected ?int $callbackType = null;
    /**
     * The callback's subtype. The subtype must be valid against its type.
     *
     * @var self::CALLBACK_SUBTYPE_*
     */
    protected ?int $callbackSubtype = null;
    /**
     * The custom payload configuration. Only for DATA callbacks. This field can be unset when updating.
     *
     * @var string
     */
    protected ?string $payloadConfig = null;
    /**
     * True to enable the callback, otherwise false
     *
     * @var bool
     */
    protected ?bool $enabled = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'channel', 'string'), new PrimitiveSerializer(self::class, 'callbackType', 'int'), new PrimitiveSerializer(self::class, 'callbackSubtype', 'int'), new PrimitiveSerializer(self::class, 'payloadConfig', 'string'), new PrimitiveSerializer(self::class, 'enabled', 'bool'));
    /**
     * Setter for channel
     *
     * @param string $channel The callback's channel.
     *                        - URL
     *                        - BATCH_URL
     *                        - EMAIL
     *                        
     *
     * @return self To use in method chains
     */
    public function setChannel(?string $channel) : self
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * Getter for channel
     *
     * @return string The callback's channel.
     *                - URL
     *                - BATCH_URL
     *                - EMAIL
     *                
     */
    public function getChannel() : string
    {
        return $this->channel;
    }
    /**
     * Setter for callbackType
     *
     * @param self::CALLBACK_TYPE_* $callbackType The callback's type.
     *
     * @return self To use in method chains
     */
    public function setCallbackType(?int $callbackType) : self
    {
        $this->callbackType = $callbackType;
        return $this;
    }
    /**
     * Getter for callbackType
     *
     * @return self::CALLBACK_TYPE_* The callback's type.
     */
    public function getCallbackType() : int
    {
        return $this->callbackType;
    }
    /**
     * Setter for callbackSubtype
     *
     * @param self::CALLBACK_SUBTYPE_* $callbackSubtype The callback's subtype. The subtype must be valid against its
     *                                                  type.
     *
     * @return self To use in method chains
     */
    public function setCallbackSubtype(?int $callbackSubtype) : self
    {
        $this->callbackSubtype = $callbackSubtype;
        return $this;
    }
    /**
     * Getter for callbackSubtype
     *
     * @return self::CALLBACK_SUBTYPE_* The callback's subtype. The subtype must be valid against its type.
     */
    public function getCallbackSubtype() : int
    {
        return $this->callbackSubtype;
    }
    /**
     * Setter for payloadConfig
     *
     * @param string $payloadConfig The custom payload configuration. Only for DATA callbacks. This field can be
     *                              unset when updating.
     *
     * @return self To use in method chains
     */
    public function setPayloadConfig(?string $payloadConfig) : self
    {
        $this->payloadConfig = $payloadConfig;
        return $this;
    }
    /**
     * Getter for payloadConfig
     *
     * @return string The custom payload configuration. Only for DATA callbacks. This field can be unset when
     *                updating.
     */
    public function getPayloadConfig() : string
    {
        return $this->payloadConfig;
    }
    /**
     * Setter for enabled
     *
     * @param bool $enabled True to enable the callback, otherwise false
     *
     * @return self To use in method chains
     */
    public function setEnabled(?bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Getter for enabled
     *
     * @return bool True to enable the callback, otherwise false
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
}