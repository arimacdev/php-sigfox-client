<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the antenna properties
 */
class MinAntenna extends Model
{
    /**
     * Antenna model
     *
     * @var string
     */
    protected ?string $model = null;
    /**
     * Setter for model
     *
     * @param string $model Antenna model
     *
     * @return static To use in method chains
     */
    public function setModel(?string $model)
    {
        $this->model = $model;
        return $this;
    }
    /**
     * Getter for model
     *
     * @return string Antenna model
     */
    public function getModel() : ?string
    {
        return $this->model;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('model' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}