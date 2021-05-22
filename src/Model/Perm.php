<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Information about a Permission
 */
class Perm extends Model
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
    /**
     * Setter for code
     *
     * @param int $code The permission's code
     *
     * @return static To use in method chains
     */
    public function setCode(?int $code)
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Getter for code
     *
     * @return int The permission's code
     */
    public function getCode() : ?int
    {
        return $this->code;
    }
    /**
     * Setter for name
     *
     * @param string $name The permission's name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The permission's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for description
     *
     * @param string $description The permission's description (in english)
     *
     * @return static To use in method chains
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string The permission's description (in english)
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return static To use in method chains
     */
    public function setActions(?array $actions)
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return static To use in method chains
     */
    public function setResources(?array $resources)
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('code' => new PrimitiveSerializer('int'), 'name' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')), 'resources' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
}