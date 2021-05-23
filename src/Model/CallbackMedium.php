<?php

namespace Arimac\Sigfox\Model;

class CallbackMedium extends CallbackHTTP
{
    use CallbackEmail;
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array();
        $serializers = array_merge($serializers, $this->getSerializeMetaDataCallbackEmail());
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
        $rules = array_merge($rules, $this->getValidationMetaDataCallbackEmail());
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}