<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\CreateCallback;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create a new callback for a given device type.
 */
class DeviceTypesIdCallbacksCreate extends Request
{
    /**
     * @var CreateCallback
     */
    protected ?CreateCallback $callback = null;
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
     * @param CreateCallback $callback
     *
     * @return self To use in method chains
     */
    public function setCallback(?CreateCallback $callback) : self
    {
        $this->callback = $callback;
        return $this;
    }
    /**
     * Getter for callback
     *
     * @return CreateCallback
     */
    public function getCallback() : ?CreateCallback
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
        return array('callback' => new ClassSerializer(self::class, 'callback', CreateCallback::class));
    }
}