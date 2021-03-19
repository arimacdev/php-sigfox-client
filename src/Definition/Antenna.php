<?php

namespace Arimac\Sigfox\Definition;

/**
 * Antenna related settings
 */
class Antenna
{
    /**
     * Antenna model of the station. E.g. "CXL 900-3LW", "CXL 900-6LW" , "" -> NONE ...
     *
     * @var string
     */
    protected string $model;
    /**
     * The base station's azimuth (in °)
     *
     * @var int
     */
    protected int $azimuth;
    /**
     * The base station's attenuation signal (in %)
     *
     * @var int
     */
    protected int $attenuation;
    /**
     * The base station's attenuation direct (in °). This field can be unset when updating.
     *
     * @var int
     */
    protected int $attenuationDirect;
    /**
     * The base station's attenuation indirect (in °). This field can be unset when updating.
     *
     * @var int
     */
    protected int $attenuationIndirect;
    /**
     * The base station's tilt
     *
     * @var int
     */
    protected int $tilt;
}