<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DeviceTypesIdCallbacksCallbackIdPut extends Definition
{
    protected $required = array('enabled');
    /**
     * True to enable the callback, false to disable it
     *
     * @var bool
     */
    protected bool $enabled;
    protected $query = array('enabled');
    /**
     * @param bool $enabled True to enable the callback, false to disable it
     */
    function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}