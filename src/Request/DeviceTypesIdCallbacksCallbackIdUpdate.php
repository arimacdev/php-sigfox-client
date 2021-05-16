<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\UpdateCallback;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected array $body = array('callback');
    /**
     * @internal
     */
    protected array $validations = array('callback' => array('required'));
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
        return array('callback' => new ClassSerializer(self::class, 'callback', UpdateCallback::class));
    }
}