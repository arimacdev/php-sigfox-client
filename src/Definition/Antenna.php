<?php

namespace Arimac\Sigfox\Definition;

/**
 * Antenna related settings
 */
class Antenna
{
    /**
     * Antenna model of the station. E.g. "CXL 900-3LW", "CXL 900-6LW" , "" -> NONE ...
     */
    protected string $model;
    /**
     * The base station's azimuth (in °)
     */
    protected int $azimuth;
    /**
     * The base station's attenuation signal (in %)
     */
    protected int $attenuation;
    /**
     * The base station's attenuation direct (in °). This field can be unset when updating.
     */
    protected int $attenuationDirect;
    /**
     * The base station's attenuation indirect (in °). This field can be unset when updating.
     */
    protected int $attenuationIndirect;
    /**
     * The base station's tilt
     */
    protected int $tilt;
}