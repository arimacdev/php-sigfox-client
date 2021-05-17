<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Extendable;
/**
 * Defines the DIST group's update properties
 */
class DISTUpdate extends CommonGroupUpdate
{
    use Extendable;
    protected ?bool $extendable = null;
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array();
        $serializers = array_merge($serializers, parent::getSerializeMetaData());
        return $serializers;
    }
}