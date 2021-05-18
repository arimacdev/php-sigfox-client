<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Antenna related settings
 */
class Antenna extends Model
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
     * @var double
     */
    protected ?float $azimuth = null;
    /**
     * The base station's attenuation signal (in %)
     *
     * @var double
     */
    protected ?float $attenuation = null;
    /**
     * The base station's attenuation direct (in °). This field can be unset when updating.
     *
     * @var double
     */
    protected ?float $attenuationDirect = null;
    /**
     * The base station's attenuation indirect (in °). This field can be unset when updating.
     *
     * @var double
     */
    protected ?float $attenuationIndirect = null;
    /**
     * The base station's tilt
     *
     * @var double
     */
    protected ?float $tilt = null;
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
    public function getModel() : ?string
    {
        return $this->model;
    }
    /**
     * Setter for azimuth
     *
     * @param double $azimuth The base station's azimuth (in °)
     *
     * @return self To use in method chains
     */
    public function setAzimuth(?float $azimuth) : self
    {
        $this->azimuth = $azimuth;
        return $this;
    }
    /**
     * Getter for azimuth
     *
     * @return double The base station's azimuth (in °)
     */
    public function getAzimuth() : ?float
    {
        return $this->azimuth;
    }
    /**
     * Setter for attenuation
     *
     * @param double $attenuation The base station's attenuation signal (in %)
     *
     * @return self To use in method chains
     */
    public function setAttenuation(?float $attenuation) : self
    {
        $this->attenuation = $attenuation;
        return $this;
    }
    /**
     * Getter for attenuation
     *
     * @return double The base station's attenuation signal (in %)
     */
    public function getAttenuation() : ?float
    {
        return $this->attenuation;
    }
    /**
     * Setter for attenuationDirect
     *
     * @param double $attenuationDirect The base station's attenuation direct (in °). This field can be unset when
     *                                  updating.
     *
     * @return self To use in method chains
     */
    public function setAttenuationDirect(?float $attenuationDirect) : self
    {
        $this->attenuationDirect = $attenuationDirect;
        return $this;
    }
    /**
     * Getter for attenuationDirect
     *
     * @return double The base station's attenuation direct (in °). This field can be unset when updating.
     */
    public function getAttenuationDirect() : ?float
    {
        return $this->attenuationDirect;
    }
    /**
     * Setter for attenuationIndirect
     *
     * @param double $attenuationIndirect The base station's attenuation indirect (in °). This field can be unset
     *                                    when updating.
     *
     * @return self To use in method chains
     */
    public function setAttenuationIndirect(?float $attenuationIndirect) : self
    {
        $this->attenuationIndirect = $attenuationIndirect;
        return $this;
    }
    /**
     * Getter for attenuationIndirect
     *
     * @return double The base station's attenuation indirect (in °). This field can be unset when updating.
     */
    public function getAttenuationIndirect() : ?float
    {
        return $this->attenuationIndirect;
    }
    /**
     * Setter for tilt
     *
     * @param double $tilt The base station's tilt
     *
     * @return self To use in method chains
     */
    public function setTilt(?float $tilt) : self
    {
        $this->tilt = $tilt;
        return $this;
    }
    /**
     * Getter for tilt
     *
     * @return double The base station's tilt
     */
    public function getTilt() : ?float
    {
        return $this->tilt;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('model' => new PrimitiveSerializer('string'), 'azimuth' => new PrimitiveSerializer('double'), 'attenuation' => new PrimitiveSerializer('double'), 'attenuationDirect' => new PrimitiveSerializer('double'), 'attenuationIndirect' => new PrimitiveSerializer('double'), 'tilt' => new PrimitiveSerializer('double'));
        return $serializers;
    }
}