<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\MaxLength;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Defines a role entity
 */
class MinRole extends Model
{
    /**
     * The role's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The role's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @var MinMetaRole[]
     */
    protected ?array $path = null;
    /**
     * Setter for id
     *
     * @param string $id The role's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The role's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The role's name
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
     * @return string The role's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for path
     *
     * @param MinMetaRole[] $path The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @return static To use in method chains
     */
    public function setPath(?array $path)
    {
        $this->path = $path;
        return $this;
    }
    /**
     * Getter for path
     *
     * @return MinMetaRole[] The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    public function getPath() : ?array
    {
        return $this->path;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'path' => new ArraySerializer(new ClassSerializer(MinMetaRole::class)));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('name' => array(new MaxLength(100)), 'path' => array(new ChildSet()));
        return $rules;
    }
}