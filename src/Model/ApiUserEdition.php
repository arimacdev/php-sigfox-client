<?php

namespace Arimac\Sigfox\Model;

/**
 * Defines the API user properties to be modified
 */
class ApiUserEdition extends ProfileIds
{
    use CommonApiUser;
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array();
        $serializers = array_merge($serializers, $this->getSerializeMetaDataCommonApiUser());
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}