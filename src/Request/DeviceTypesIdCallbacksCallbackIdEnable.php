<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Enable or disable a callback for a given device type.
 */
class DeviceTypesIdCallbacksCallbackIdEnable extends Definition
{
    /**
     * True to enable the callback, false to disable it
     *
     * @var bool
     */
    protected ?bool $enabled = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'enabled', 'bool'));
    protected $query = array('enabled');
    protected $validations = array('enabled' => array('required'));
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