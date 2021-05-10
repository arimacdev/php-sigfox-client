<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
/**
 * Enable or disable a callback for a given device type.
 * 
 */
class DeviceTypesIdCallbacksCallbackIdEnable extends Definition
{
    /**
     * True to enable the callback, false to disable it
     *
     * @var bool
     */
    protected ?bool $enabled = null;
    protected $query = array('enabled');
    /**
     * Setter for enabled
     *
     * @param bool $enabled True to enable the callback, false to disable it
     *
     * @return self To use in method chains
     */
    public function setEnabled(?bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
}