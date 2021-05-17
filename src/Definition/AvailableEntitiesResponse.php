<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\AvailableEntitiesResponse\OperatorsItem;
use Arimac\Sigfox\Definition\AvailableEntitiesResponse\ClassesItem;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Returned data for Service Coverage Available Entities API
 */
class AvailableEntitiesResponse extends Definition
{
    /**
     * Array of operators infos and their forecast radio planning infos
     *
     * @var OperatorsItem[]
     */
    protected ?array $operators = null;
    /**
     * Array of device class infos.
     *
     * @var ClassesItem[]
     */
    protected ?array $classes = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * Setter for operators
     *
     * @param OperatorsItem[] $operators Array of operators infos and their forecast radio planning infos
     *
     * @return self To use in method chains
     */
    public function setOperators(?array $operators) : self
    {
        $this->operators = $operators;
        return $this;
    }
    /**
     * Getter for operators
     *
     * @return OperatorsItem[] Array of operators infos and their forecast radio planning infos
     */
    public function getOperators() : ?array
    {
        return $this->operators;
    }
    /**
     * Setter for classes
     *
     * @param ClassesItem[] $classes Array of device class infos.
     *
     * @return self To use in method chains
     */
    public function setClasses(?array $classes) : self
    {
        $this->classes = $classes;
        return $this;
    }
    /**
     * Getter for classes
     *
     * @return ClassesItem[] Array of device class infos.
     */
    public function getClasses() : ?array
    {
        return $this->classes;
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
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('operators' => new ArraySerializer(new ClassSerializer(OperatorsItem::class)), 'classes' => new ArraySerializer(new ClassSerializer(ClassesItem::class)), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
}