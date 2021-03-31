<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DeviceTypesIdCallbacksPost extends Definition
{
    protected $required = array('callback');
    /** @var array */
    protected array $callback;
    protected $body = array('callback');
    /**
     * @param array callback
     */
    function setCallback(array $callback)
    {
        $this->callback = $callback;
    }
}