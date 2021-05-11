<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\CreateCallback;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create a new callback for a given device type.
 * 
 */
class DeviceTypesIdCallbacksCreate extends Definition
{
    /**
     * @var CreateCallback
     */
    protected ?CreateCallback $callback = null;
    protected $serialize = array(new ClassSerializer(self::class, 'callback', CreateCallback::class));
    protected $body = array('callback');
    protected $validations = array('callback' => array('required'));
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
}