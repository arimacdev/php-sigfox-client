<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Extendable;
use Arimac\Sigfox\ExtendableImpl;
class AsynchronousDeviceCreationJob extends BulkDeviceAsynchronousRequest implements ExtendableImpl
{
    use Extendable;
    protected bool $extendable = true;
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
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array();
        $rules = array_merge($rules, parent::getValidationMetaData());
        return $rules;
    }
}