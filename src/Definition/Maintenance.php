<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseMaintenance;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\Contact;
class Maintenance extends BaseMaintenance
{
    /** @var MinGroup */
    protected ?MinGroup $group = null;
    /** @var Contact[] */
    protected ?array $contacts = null;
    /** @var string[] */
    protected ?array $actions = null;
    /** @var string[] */
    protected ?array $resources = null;
    protected $objects = array('group' => '\\Arimac\\Sigfox\\Definition\\MinGroup');
    /**
     * @param MinGroup group
     */
    function setGroup(?MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : ?MinGroup
    {
        return $this->group;
    }
    /**
     * @param Contact[] contacts
     */
    function setContacts(?array $contacts)
    {
        $this->contacts = $contacts;
    }
    /**
     * @return Contact[] contacts
     */
    function getContacts() : ?array
    {
        return $this->contacts;
    }
    /**
     * @param string[] actions
     */
    function setActions(?array $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return string[] actions
     */
    function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * @param string[] resources
     */
    function setResources(?array $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return string[] resources
     */
    function getResources() : ?array
    {
        return $this->resources;
    }
}