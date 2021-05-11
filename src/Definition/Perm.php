<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Information about a Permission
 */
class Perm extends Definition
{
    /**
     * The permission's code
     *
     * @var int
     */
    protected ?int $code = null;
    /**
     * The permission's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The permission's description (in english)
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'code', 'int'), new PrimitiveSerializer(self::class, 'name', 'string'), new PrimitiveSerializer(self::class, 'description', 'string'), new ArraySerializer(self::class, 'actions', new PrimitiveSerializer(self::class, 'actions', 'string')), new ArraySerializer(self::class, 'resources', new PrimitiveSerializer(self::class, 'resources', 'string')));
    /**
     * Setter for code
     *
     * @param int $code The permission's code
     *
     * @return self To use in method chains
     */
    public function setCode(?int $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Getter for code
     *
     * @return int The permission's code
     */
    public function getCode() : int
    {
        return $this->code;
    }
    /**
     * Setter for name
     *
     * @param string $name The permission's name
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
     * @return string The permission's name
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for description
     *
     * @param string $description The permission's description (in english)
     *
     * @return self To use in method chains
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string The permission's description (in english)
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return self To use in method chains
     */
    public function setResources(?array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
}