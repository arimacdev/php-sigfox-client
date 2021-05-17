<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\GlobalCoverageResponse\DataItem;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Returned data for Global Coverage API
 */
class GlobalCoverageResponse extends Definition
{
    /**
     * An array containing the response for each point.
     *
     * @var DataItem[]
     */
    protected ?array $data = null;
    /**
     * Setter for data
     *
     * @param DataItem[] $data An array containing the response for each point.
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
     * @return DataItem[] An array containing the response for each point.
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
        $serializers = array('data' => new ArraySerializer(new ClassSerializer(DataItem::class)));
        return $serializers;
    }
}