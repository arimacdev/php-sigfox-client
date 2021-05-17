<?php

namespace Arimac\Sigfox\Definition;

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
}