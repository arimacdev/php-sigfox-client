<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Extendable;
class AsynchronousDeviceCreationJob extends BulkDeviceAsynchronousRequest
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