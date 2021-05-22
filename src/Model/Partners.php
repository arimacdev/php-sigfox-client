<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Min;
/**
 * Defines the Partners group type properties
 */
class Partners extends Group
{
    use BillableGroup;
    /**
     * Number of prototype registered. Accessible only for groups under SO
     *
     * @var int
     */
    protected ?int $currentPrototypeCount = null;
    /**
     * Setter for currentPrototypeCount
     *
     * @param int $currentPrototypeCount Number of prototype registered. Accessible only for groups under SO
     *
     * @return static To use in method chains
     */
    public function setCurrentPrototypeCount(?int $currentPrototypeCount)
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
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('currentPrototypeCount' => array(new Min(0)));
        $rules = array_merge($rules, parent::getValidationMetaData());
        $rules = array_merge($rules, $this->getValidationMetaDataBillableGroup());
        return $rules;
    }
}