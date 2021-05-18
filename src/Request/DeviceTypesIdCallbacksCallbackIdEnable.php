<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
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
    /**
     * @internal
     */
    protected array $query = array('enabled');
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
     * @internal
     *
     * @return bool True to enable the callback, false to disable it
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('enabled' => new PrimitiveSerializer('bool'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('enabled' => array(new Required()));
        return $rules;
    }
}