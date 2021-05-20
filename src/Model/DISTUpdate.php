<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Extendable;
/**
 * Defines the DIST group's update properties
 */
class DISTUpdate extends CommonGroupUpdate
{
    use Extendable;
    protected ?bool $extendable = true;
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