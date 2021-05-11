<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\AsynchronousDeviceReplacementJob\DataItem;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class AsynchronousDeviceReplacementJob extends Definition
{
    /**
     * @var DataItem[]
     */
    protected ?array $data = null;
    protected $serialize = array(new ArraySerializer(self::class, 'data', new ClassSerializer(self::class, 'data', DataItem::class)));
    /**
     * Setter for data
     *
     * @param DataItem[] $data
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
     * @return DataItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
}