<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class Maintenance extends BaseMaintenance
{
    /**
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * @var Contact[]
     */
    protected ?array $contacts = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    /**
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?MinGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for contacts
     *
     * @param Contact[] $contacts
     *
     * @return self To use in method chains
     */
    public function setContacts(?array $contacts) : self
    {
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * Getter for contacts
     *
     * @return Contact[]
     */
    public function getContacts() : ?array
    {
        return $this->contacts;
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
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('group' => new ClassSerializer(self::class, 'group', MinGroup::class), 'contacts' => new ArraySerializer(self::class, 'contacts', new ClassSerializer(self::class, 'contacts', Contact::class)), 'actions' => new ArraySerializer(self::class, 'actions', new PrimitiveSerializer(self::class, 'actions', 'string')), 'resources' => new ArraySerializer(self::class, 'resources', new PrimitiveSerializer(self::class, 'resources', 'string')));
    }
}