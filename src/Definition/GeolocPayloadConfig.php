<?php

namespace Arimac\Sigfox\Definition;

/**
 * When the payload display type is set to Geolocation for a Device Type, the geolocationPayloadConfig represents the format of the payload that the devices will use. Only recognized formats will be displayed. If you have a device with a GPS capable modem, please contact your device/modem manufacturer to get the suitable GeolocationPayloadConfig if any.
 */
class GeolocPayloadConfig
{
    /**
     * Geolocation payload id
     */
    protected string $id;
    /**
     * Geolocation payload name
     */
    protected string $name;
}