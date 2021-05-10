<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\CreateCallback;
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
    protected $serialize = array('callback' => CreateCallback::class);
    protected $body = array('callback');
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