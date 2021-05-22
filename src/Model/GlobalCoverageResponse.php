<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\GlobalCoverageResponse\DataItem;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Returned data for Global Coverage API
 */
class GlobalCoverageResponse extends Model
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
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('data' => array(new ChildSet()));
        return $rules;
    }
}