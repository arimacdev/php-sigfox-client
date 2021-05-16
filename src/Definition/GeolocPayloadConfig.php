<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * When the payload display type is set to Geolocation for a Device Type, the geolocationPayloadConfig represents the
 * format of the payload that the devices will use. Only recognized formats will be displayed. If you have a device
 * with a GPS capable modem, please contact your device/modem manufacturer to get the suitable
 * GeolocationPayloadConfig if any.
 */
class GeolocPayloadConfig extends Definition
{
    /**
     * Geolocation payload id
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * Geolocation payload name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for id
     *
     * @param string $id Geolocation payload id
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string Geolocation payload id
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name Geolocation payload name
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string Geolocation payload name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer(self::class, 'id', 'string'), 'name' => new PrimitiveSerializer(self::class, 'name', 'string'));
    }
}