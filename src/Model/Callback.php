<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Common information about Callback template
 */
class Callback extends Model
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
     * The callback's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The callback's channel.
     * - URL
     * - BATCH_URL
     * - EMAIL
     *
     * @var string
     */
    protected ?string $channel = null;
    /**
     * The callback's type.
     * 
     * - {@see Callback::CALLBACK_TYPE_DATA}
     * - {@see Callback::CALLBACK_TYPE_SERVICE}
     * - {@see Callback::CALLBACK_TYPE_ERROR}
     *
     * @var int
     */
    protected ?int $callbackType = null;
    /**
     * The callback's subtype. The subtype must be valid against its type.
     * 
     * - {@see Callback::CALLBACK_SUBTYPE_STATUS}
     * - {@see Callback::CALLBACK_SUBTYPE_GEOLOC}
     * - {@see Callback::CALLBACK_SUBTYPE_UPLINK}
     * - {@see Callback::CALLBACK_SUBTYPE_BIDIR}
     * - {@see Callback::CALLBACK_SUBTYPE_ACKNOWLEDGE}
     * - {@see Callback::CALLBACK_SUBTYPE_REPEATER}
     * - {@see Callback::CALLBACK_SUBTYPE_DATA_ADVANCED}
     *
     * @var int
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
    /**
     * True if last use of the callback fails, otherwise false
     *
     * @var bool
     */
    protected ?bool $dead = null;
    /**
     * Setter for id
     *
     * @param string $id The callback's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The callback's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for channel
     *
     * @param string $channel The callback's channel.
     *                        - URL
     *                        - BATCH_URL
     *                        - EMAIL
     *                        
     *
     * @return static To use in method chains
     */
    public function setChannel(?string $channel)
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
    public function getChannel() : ?string
    {
        return $this->channel;
    }
    /**
     * Setter for callbackType
     *
     * @param int $callbackType The callback's type.
     *                          
     *                          - {@see Callback::CALLBACK_TYPE_DATA}
     *                          - {@see Callback::CALLBACK_TYPE_SERVICE}
     *                          - {@see Callback::CALLBACK_TYPE_ERROR}
     *                          
     *
     * @return static To use in method chains
     */
    public function setCallbackType(?int $callbackType)
    {
        $this->callbackType = $callbackType;
        return $this;
    }
    /**
     * Getter for callbackType
     *
     * @return int The callback's type.
     *             
     *             - {@see Callback::CALLBACK_TYPE_DATA}
     *             - {@see Callback::CALLBACK_TYPE_SERVICE}
     *             - {@see Callback::CALLBACK_TYPE_ERROR}
     *             
     */
    public function getCallbackType() : ?int
    {
        return $this->callbackType;
    }
    /**
     * Setter for callbackSubtype
     *
     * @param int $callbackSubtype The callback's subtype. The subtype must be valid against its type.
     *                             
     *                             - {@see Callback::CALLBACK_SUBTYPE_STATUS}
     *                             - {@see Callback::CALLBACK_SUBTYPE_GEOLOC}
     *                             - {@see Callback::CALLBACK_SUBTYPE_UPLINK}
     *                             - {@see Callback::CALLBACK_SUBTYPE_BIDIR}
     *                             - {@see Callback::CALLBACK_SUBTYPE_ACKNOWLEDGE}
     *                             - {@see Callback::CALLBACK_SUBTYPE_REPEATER}
     *                             - {@see Callback::CALLBACK_SUBTYPE_DATA_ADVANCED}
     *                             
     *
     * @return static To use in method chains
     */
    public function setCallbackSubtype(?int $callbackSubtype)
    {
        $this->callbackSubtype = $callbackSubtype;
        return $this;
    }
    /**
     * Getter for callbackSubtype
     *
     * @return int The callback's subtype. The subtype must be valid against its type.
     *             
     *             - {@see Callback::CALLBACK_SUBTYPE_STATUS}
     *             - {@see Callback::CALLBACK_SUBTYPE_GEOLOC}
     *             - {@see Callback::CALLBACK_SUBTYPE_UPLINK}
     *             - {@see Callback::CALLBACK_SUBTYPE_BIDIR}
     *             - {@see Callback::CALLBACK_SUBTYPE_ACKNOWLEDGE}
     *             - {@see Callback::CALLBACK_SUBTYPE_REPEATER}
     *             - {@see Callback::CALLBACK_SUBTYPE_DATA_ADVANCED}
     *             
     */
    public function getCallbackSubtype() : ?int
    {
        return $this->callbackSubtype;
    }
    /**
     * Setter for payloadConfig
     *
     * @param string $payloadConfig The custom payload configuration. Only for DATA callbacks. This field can be
     *                              unset when updating.
     *
     * @return static To use in method chains
     */
    public function setPayloadConfig(?string $payloadConfig)
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
    public function getPayloadConfig() : ?string
    {
        return $this->payloadConfig;
    }
    /**
     * Setter for enabled
     *
     * @param bool $enabled True to enable the callback, otherwise false
     *
     * @return static To use in method chains
     */
    public function setEnabled(?bool $enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Getter for enabled
     *
     * @return bool True to enable the callback, otherwise false
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * Setter for dead
     *
     * @param bool $dead True if last use of the callback fails, otherwise false
     *
     * @return static To use in method chains
     */
    public function setDead(?bool $dead)
    {
        $this->dead = $dead;
        return $this;
    }
    /**
     * Getter for dead
     *
     * @return bool True if last use of the callback fails, otherwise false
     */
    public function getDead() : ?bool
    {
        return $this->dead;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'channel' => new PrimitiveSerializer('string'), 'callbackType' => new PrimitiveSerializer('int'), 'callbackSubtype' => new PrimitiveSerializer('int'), 'payloadConfig' => new PrimitiveSerializer('string'), 'enabled' => new PrimitiveSerializer('bool'), 'dead' => new PrimitiveSerializer('bool'));
        return $serializers;
    }
}