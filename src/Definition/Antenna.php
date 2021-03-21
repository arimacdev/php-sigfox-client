<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Antenna related settings
 */
class Antenna extends Definition
{
    /**
     * Antenna model of the station. E.g. "CXL 900-3LW", "CXL 900-6LW" , "" -> NONE ...
     *
     * @var string
     */
    protected ?string $model = null;
    /**
     * The base station's azimuth (in °)
     *
     * @var float
     */
    protected ?float $azimuth = null;
    /**
     * The base station's attenuation signal (in %)
     *
     * @var float
     */
    protected ?float $attenuation = null;
    /**
     * The base station's attenuation direct (in °). This field can be unset when updating.
     *
     * @var float
     */
    protected ?float $attenuationDirect = null;
    /**
     * The base station's attenuation indirect (in °). This field can be unset when updating.
     *
     * @var float
     */
    protected ?float $attenuationIndirect = null;
    /**
     * The base station's tilt
     *
     * @var float
     */
    protected ?float $tilt = null;
    /**
     * @param string $model Antenna model of the station. E.g. "CXL 900-3LW", "CXL 900-6LW" , "" -> NONE ...
     */
    function setModel(?string $model)
    {
        $this->model = $model;
    }
    /**
     * @return string Antenna model of the station. E.g. "CXL 900-3LW", "CXL 900-6LW" , "" -> NONE ...
     */
    function getModel() : ?string
    {
        return $this->model;
    }
    /**
     * @param float $azimuth The base station's azimuth (in °)
     */
    function setAzimuth(?float $azimuth)
    {
        $this->azimuth = $azimuth;
    }
    /**
     * @return float The base station's azimuth (in °)
     */
    function getAzimuth() : ?float
    {
        return $this->azimuth;
    }
    /**
     * @param float $attenuation The base station's attenuation signal (in %)
     */
    function setAttenuation(?float $attenuation)
    {
        $this->attenuation = $attenuation;
    }
    /**
     * @return float The base station's attenuation signal (in %)
     */
    function getAttenuation() : ?float
    {
        return $this->attenuation;
    }
    /**
     * @param float $attenuationDirect The base station's attenuation direct (in °). This field can be unset when updating.
     */
    function setAttenuationDirect(?float $attenuationDirect)
    {
        $this->attenuationDirect = $attenuationDirect;
    }
    /**
     * @return float The base station's attenuation direct (in °). This field can be unset when updating.
     */
    function getAttenuationDirect() : ?float
    {
        return $this->attenuationDirect;
    }
    /**
     * @param float $attenuationIndirect The base station's attenuation indirect (in °). This field can be unset when updating.
     */
    function setAttenuationIndirect(?float $attenuationIndirect)
    {
        $this->attenuationIndirect = $attenuationIndirect;
    }
    /**
     * @return float The base station's attenuation indirect (in °). This field can be unset when updating.
     */
    function getAttenuationIndirect() : ?float
    {
        return $this->attenuationIndirect;
    }
    /**
     * @param float $tilt The base station's tilt
     */
    function setTilt(?float $tilt)
    {
        $this->tilt = $tilt;
    }
    /**
     * @return float The base station's tilt
     */
    function getTilt() : ?float
    {
        return $this->tilt;
    }
}