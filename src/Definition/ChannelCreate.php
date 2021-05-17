<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the Channel group's create properties
 */
class ChannelCreate extends CommonGroupCreate
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
}