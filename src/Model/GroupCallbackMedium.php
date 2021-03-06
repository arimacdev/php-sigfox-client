<?php

namespace Arimac\Sigfox\Model;

/**
 * Callback types
 */
class GroupCallbackMedium extends GroupCallbackHTTP
{
    use GroupCallbackEmail;
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array();
        $serializers = array_merge($serializers, $this->getSerializeMetaDataGroupCallbackEmail());
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
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
        $rules = array_merge($rules, $this->getValidationMetaDataGroupCallbackEmail());
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}