<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the Channel group's update properties
 */
class ChannelUpdate extends CommonGroupUpdate
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