<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseMaintenance;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\Contact;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
class Maintenance extends BaseMaintenance
{
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var Contact[] */
    protected array $contacts;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param MinGroup group
     */
    function setGroup(MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * @param Contact[] contacts
     */
    function setContacts(array $contacts)
    {
        $this->contacts = $contacts;
    }
    /**
     * @return Contact[] contacts
     */
    function getContacts() : array
    {
        return $this->contacts;
    }
    /**
     * @param Actions actions
     */
    function setActions(Actions $actions)
    {
        $this->actions = $actions;
    }
    /**
     * @return Actions actions
     */
    function getActions() : Actions
    {
        return $this->actions;
    }
    /**
     * @param Resources resources
     */
    function setResources(Resources $resources)
    {
        $this->resources = $resources;
    }
    /**
     * @return Resources resources
     */
    function getResources() : Resources
    {
        return $this->resources;
    }
}