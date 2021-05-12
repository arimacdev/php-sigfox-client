<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class DevicesCreateResponse extends Definition
{
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'));
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
}