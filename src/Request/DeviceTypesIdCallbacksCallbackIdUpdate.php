<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\UpdateCallback;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Update a callback for a given device type
 */
class DeviceTypesIdCallbacksCallbackIdUpdate extends Request
{
    /**
     * The callback to update
     *
     * @var UpdateCallback
     */
    protected ?UpdateCallback $callback = null;
    /**
     * @internal
     */
    protected ?string $body = 'callback';
    /**
     * Setter for callback
     *
     * @param UpdateCallback $callback The callback to update
     *
     * @return self To use in method chains
     */
    public function setCallback(?UpdateCallback $callback) : self
    {
        $this->callback = $callback;
        return $this;
    }
    /**
     * Getter for callback
     *
     * @internal
     *
     * @return UpdateCallback The callback to update
     */
    public function getCallback() : ?UpdateCallback
    {
        return $this->callback;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('callback' => new ClassSerializer(UpdateCallback::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('callback' => array(new Required(), new Child()));
        return $rules;
    }
}