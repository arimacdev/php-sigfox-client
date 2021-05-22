<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Required;
class DeviceActionJob extends Model
{
    /**
     * @var string[]
     */
    protected ?array $data = null;
    /**
     * Setter for data
     *
     * @param string[] $data
     *
     * @return static To use in method chains
     */
    public function setData(?array $data)
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Getter for data
     *
     * @return string[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('data' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('data' => array(new Required()));
        return $rules;
    }
}