<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\AvailableEntitiesResponse\OperatorsItem;
use Arimac\Sigfox\Model\AvailableEntitiesResponse\ClassesItem;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Returned data for Service Coverage Available Entities API
 */
class AvailableEntitiesResponse extends Model
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
     * @return static To use in method chains
     */
    public function setOperators(?array $operators)
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
     * @return static To use in method chains
     */
    public function setClasses(?array $classes)
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
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('operators' => new ArraySerializer(new ClassSerializer(OperatorsItem::class)), 'classes' => new ArraySerializer(new ClassSerializer(ClassesItem::class)), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('operators' => array(new ChildSet()), 'classes' => array(new ChildSet()));
        return $rules;
    }
}