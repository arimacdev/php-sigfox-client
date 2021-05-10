<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\UpdateCallback;
/**
 * Update a callback for a given device type
 * 
 */
class DeviceTypesIdCallbacksCallbackIdUpdate extends Definition
{
    /**
     * The callback to update
     *
     * @var UpdateCallback
     */
    protected ?UpdateCallback $callback = null;
    protected $serialize = array('callback' => UpdateCallback::class);
    protected $body = array('callback');
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
}