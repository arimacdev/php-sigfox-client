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
    /**
     * @param string model Antenna model of the station. E.g. "CXL 900-3LW", "CXL 900-6LW" , "" -> NONE ...
     */
    function setModel(string $model)
    {
        $this->model = $model;
    }
    /**
     * @return string Antenna model of the station. E.g. "CXL 900-3LW", "CXL 900-6LW" , "" -> NONE ...
     */
    function getModel() : string
    {
        return $this->model;
    }
    /**
     * @param int azimuth The base station's azimuth (in °)
     */
    function setAzimuth(int $azimuth)
    {
        $this->azimuth = $azimuth;
    }
    /**
     * @return int The base station's azimuth (in °)
     */
    function getAzimuth() : int
    {
        return $this->azimuth;
    }
    /**
     * @param int attenuation The base station's attenuation signal (in %)
     */
    function setAttenuation(int $attenuation)
    {
        $this->attenuation = $attenuation;
    }
    /**
     * @return int The base station's attenuation signal (in %)
     */
    function getAttenuation() : int
    {
        return $this->attenuation;
    }
    /**
     * @param int attenuationDirect The base station's attenuation direct (in °). This field can be unset when updating.
     */
    function setAttenuationDirect(int $attenuationDirect)
    {
        $this->attenuationDirect = $attenuationDirect;
    }
    /**
     * @return int The base station's attenuation direct (in °). This field can be unset when updating.
     */
    function getAttenuationDirect() : int
    {
        return $this->attenuationDirect;
    }
    /**
     * @param int attenuationIndirect The base station's attenuation indirect (in °). This field can be unset when updating.
     */
    function setAttenuationIndirect(int $attenuationIndirect)
    {
        $this->attenuationIndirect = $attenuationIndirect;
    }
    /**
     * @return int The base station's attenuation indirect (in °). This field can be unset when updating.
     */
    function getAttenuationIndirect() : int
    {
        return $this->attenuationIndirect;
    }
    /**
     * @param int tilt The base station's tilt
     */
    function setTilt(int $tilt)
    {
        $this->tilt = $tilt;
    }
    /**
     * @return int The base station's tilt
     */
    function getTilt() : int
    {
        return $this->tilt;
    }
}