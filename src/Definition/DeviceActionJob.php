<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class DeviceActionJob extends Definition
{
    /**
     * @var string[]
     */
    protected ?array $data = null;
    protected array $validations = array('data' => array('required'));
    /**
     * Setter for data
     *
     * @param string[] $data
     *
     * @return self To use in method chains
     */
    public function setData(?array $data) : self
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
     */
    public function getSerializeMetaData() : array
    {
        return array('data' => new ArraySerializer(self::class, 'data', new PrimitiveSerializer(self::class, 'data', 'string')));
    }
}