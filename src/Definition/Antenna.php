<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * @var int
     */
    protected ?int $azimuth = null;
    /**
     * The base station's attenuation signal (in %)
     *
     * @var int
     */
    protected ?int $attenuation = null;
    /**
     * The base station's attenuation direct (in °). This field can be unset when updating.
     *
     * @var int
     */
    protected ?int $attenuationDirect = null;
    /**
     * The base station's attenuation indirect (in °). This field can be unset when updating.
     *
     * @var int
     */
    protected ?int $attenuationIndirect = null;
    /**
     * The base station's tilt
     *
     * @var int
     */
    protected ?int $tilt = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'model', 'string'), new PrimitiveSerializer(self::class, 'azimuth', 'int'), new PrimitiveSerializer(self::class, 'attenuation', 'int'), new PrimitiveSerializer(self::class, 'attenuationDirect', 'int'), new PrimitiveSerializer(self::class, 'attenuationIndirect', 'int'), new PrimitiveSerializer(self::class, 'tilt', 'int'));
    /**
     * Setter for model
     *
     * @param string $model Antenna model of the station. E.g. "CXL 900-3LW", "CXL 900-6LW" , "" -> NONE ...
     *
     * @return self To use in method chains
     */
    public function setModel(?string $model) : self
    {
        $this->model = $model;
        return $this;
    }
    /**
     * Getter for model
     *
     * @return string Antenna model of the station. E.g. "CXL 900-3LW", "CXL 900-6LW" , "" -> NONE ...
     */
    public function getModel() : string
    {
        return $this->model;
    }
    /**
     * Setter for azimuth
     *
     * @param int $azimuth The base station's azimuth (in °)
     *
     * @return self To use in method chains
     */
    public function setAzimuth(?int $azimuth) : self
    {
        $this->azimuth = $azimuth;
        return $this;
    }
    /**
     * Getter for azimuth
     *
     * @return int The base station's azimuth (in °)
     */
    public function getAzimuth() : int
    {
        return $this->azimuth;
    }
    /**
     * Setter for attenuation
     *
     * @param int $attenuation The base station's attenuation signal (in %)
     *
     * @return self To use in method chains
     */
    public function setAttenuation(?int $attenuation) : self
    {
        $this->attenuation = $attenuation;
        return $this;
    }
    /**
     * Getter for attenuation
     *
     * @return int The base station's attenuation signal (in %)
     */
    public function getAttenuation() : int
    {
        return $this->attenuation;
    }
    /**
     * Setter for attenuationDirect
     *
     * @param int $attenuationDirect The base station's attenuation direct (in °). This field can be unset when
     *                               updating.
     *
     * @return self To use in method chains
     */
    public function setAttenuationDirect(?int $attenuationDirect) : self
    {
        $this->attenuationDirect = $attenuationDirect;
        return $this;
    }
    /**
     * Getter for attenuationDirect
     *
     * @return int The base station's attenuation direct (in °). This field can be unset when updating.
     */
    public function getAttenuationDirect() : int
    {
        return $this->attenuationDirect;
    }
    /**
     * Setter for attenuationIndirect
     *
     * @param int $attenuationIndirect The base station's attenuation indirect (in °). This field can be unset when
     *                                 updating.
     *
     * @return self To use in method chains
     */
    public function setAttenuationIndirect(?int $attenuationIndirect) : self
    {
        $this->attenuationIndirect = $attenuationIndirect;
        return $this;
    }
    /**
     * Getter for attenuationIndirect
     *
     * @return int The base station's attenuation indirect (in °). This field can be unset when updating.
     */
    public function getAttenuationIndirect() : int
    {
        return $this->attenuationIndirect;
    }
    /**
     * Setter for tilt
     *
     * @param int $tilt The base station's tilt
     *
     * @return self To use in method chains
     */
    public function setTilt(?int $tilt) : self
    {
        $this->tilt = $tilt;
        return $this;
    }
    /**
     * Getter for tilt
     *
     * @return int The base station's tilt
     */
    public function getTilt() : int
    {
        return $this->tilt;
    }
}