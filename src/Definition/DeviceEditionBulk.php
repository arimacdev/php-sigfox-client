<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DeviceEditionBulk extends Definition
{
    use SingleDeviceFields;
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The name of the device
     *
     * @var string
     */
    protected ?string $name = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'), new PrimitiveSerializer(self::class, 'name', 'string'));
    /**
     * Setter for id
     *
     * @param string $id The device's identifier (hexadecimal format)
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The device's identifier (hexadecimal format)
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The name of the device
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The name of the device
     */
    public function getName() : string
    {
        return $this->name;
    }
}