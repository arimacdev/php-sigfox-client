<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class AsynchronousDeviceEditionJob extends Definition
{
    /**
     * @var DeviceEditionBulk[]
     */
    protected ?array $data = null;
    protected array $validations = array('data' => array('required'));
    /**
     * Setter for data
     *
     * @param DeviceEditionBulk[] $data
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
     * @return DeviceEditionBulk[]
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
        return array('data' => new ArraySerializer(self::class, 'data', new ClassSerializer(self::class, 'data', DeviceEditionBulk::class)));
    }
}