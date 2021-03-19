<?php

namespace Arimac\Sigfox\Definition;

class SingleDeviceFields
{
    /**
     * true if the device is activable and can take a token. Not used if the device has already a token
     */
    protected bool $activable;
    /**
     * Allow token renewal ?
     */
    protected bool $automaticRenewal;
    /**
     * The device's provided latitude
     */
    protected int $lat;
    /**
     * The device's provided longitude
     */
    protected int $lng;
    /**
     * If the device is a prototype or not
     */
    protected bool $prototype;
}