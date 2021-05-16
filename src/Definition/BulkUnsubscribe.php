<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BulkUnsubscribe\DataItem;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class BulkUnsubscribe extends Definition
{
    /**
     * @var DataItem[]
     */
    protected ?array $data = null;
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
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('data' => new ArraySerializer(self::class, 'data', new ClassSerializer(self::class, 'data', DataItem::class)));
    }
}