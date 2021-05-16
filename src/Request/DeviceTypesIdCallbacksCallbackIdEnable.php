<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Enable or disable a callback for a given device type.
 */
class DeviceTypesIdCallbacksCallbackIdEnable extends Request
{
    /**
     * True to enable the callback, false to disable it
     *
     * @var bool
     */
    protected ?bool $enabled = null;
    protected array $query = array('enabled');
    protected array $validations = array('enabled' => array('required'));
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
    /**
     * Getter for enabled
     *
     * @return bool True to enable the callback, false to disable it
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('enabled' => new PrimitiveSerializer(self::class, 'enabled', 'bool'));
    }
}