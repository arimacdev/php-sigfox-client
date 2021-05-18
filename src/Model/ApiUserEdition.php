<?php

namespace Arimac\Sigfox\Model;

/**
 * Defines the API user properties to be modified
 */
class ApiUserEdition extends CommonApiUser
{
    use ProfileIds;
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array();
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        $serializers = array_merge($serializers, $this->getSerializeMetaDataProfileIds());
        return $serializers;
    }
}