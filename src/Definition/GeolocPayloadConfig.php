<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * When the payload display type is set to Geolocation for a Device Type, the geolocationPayloadConfig represents the format of the payload that the devices will use. Only recognized formats will be displayed. If you have a device with a GPS capable modem, please contact your device/modem manufacturer to get the suitable GeolocationPayloadConfig if any.
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
     * @param string $id Geolocation payload id
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string Geolocation payload id
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $name Geolocation payload name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string Geolocation payload name
     */
    function getName() : ?string
    {
        return $this->name;
    }
}