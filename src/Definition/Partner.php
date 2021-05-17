<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines Partner group type properties
 */
class Partner extends Group
{
    use BillableGroup;
    /**
     * Number of prototype registered. Accessible only for groups under SO
     *
     * @var int
     */
    protected ?int $currentPrototypeCount = null;
    /**
     * @internal
     */
    protected array $validations = array('currentPrototypeCount' => array('min:0', 'numeric', 'nullable'));
    /**
     * Setter for currentPrototypeCount
     *
     * @param int $currentPrototypeCount Number of prototype registered. Accessible only for groups under SO
     *
     * @return self To use in method chains
     */
    public function setCurrentPrototypeCount(?int $currentPrototypeCount) : self
    {
        $this->currentPrototypeCount = $currentPrototypeCount;
        return $this;
    }
    /**
     * Getter for currentPrototypeCount
     *
     * @return int Number of prototype registered. Accessible only for groups under SO
     */
    public function getCurrentPrototypeCount() : ?int
    {
        return $this->currentPrototypeCount;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('currentPrototypeCount' => new PrimitiveSerializer('int'));
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        $serializers = array_merge($serializers, $this->getSerializeMetaDataBillableGroup());
        return $serializers;
    }
}