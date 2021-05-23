<?php

namespace Arimac\Sigfox\Model;

/**
 * Defines the Partners group's update properties
 */
class PartnersUpdate extends CommonGroupUpdate
{
    use BillableGroup;
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array();
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
        $rules = array();
        $rules = array_merge($rules, parent::getValidationMetaData());
        $rules = array_merge($rules, $this->getValidationMetaDataBillableGroup());
        return $rules;
    }
}