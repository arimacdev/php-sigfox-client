<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class MinMaintenance extends Definition
{
    /**
     * The maintenance's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The maintenance's name
     *
     * @var string
     */
    protected ?string $name = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'), new PrimitiveSerializer(self::class, 'name', 'string'));
    /**
     * Setter for id
     *
     * @param string $id The maintenance's identifier
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
     * @return string The maintenance's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The maintenance's name
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
     * @return string The maintenance's name
     */
    public function getName() : string
    {
        return $this->name;
    }
}