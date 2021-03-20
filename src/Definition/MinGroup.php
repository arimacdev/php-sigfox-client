<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Defines a group entity
 */
class MinGroup
{
    /** SO */
    public const TYPE_SO = 0;
    /** Other */
    public const TYPE_OTHER = 2;
    /** SVNO */
    public const TYPE_SVNO = 5;
    /** Partners */
    public const TYPE_PARTNERS = 6;
    /** NIP */
    public const TYPE_NIP = 7;
    /** DIST */
    public const TYPE_DIST = 8;
    /** Channel */
    public const TYPE_CHANNEL = 9;
    /** Starter */
    public const TYPE_STARTER = 10;
    /** Partner */
    public const TYPE_PARTNER = 11;
    /**
     * The group identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The group name
     *
     * @var string
     */
    protected string $name;
    /**
     * Group's type
     * - `MinGroup::TYPE_SO`
     * - `MinGroup::TYPE_OTHER`
     * - `MinGroup::TYPE_SVNO`
     * - `MinGroup::TYPE_PARTNERS`
     * - `MinGroup::TYPE_NIP`
     * - `MinGroup::TYPE_DIST`
     * - `MinGroup::TYPE_CHANNEL`
     * - `MinGroup::TYPE_STARTER`
     * - `MinGroup::TYPE_PARTNER`
     *
     * @var int
     */
    protected int $type;
    /**
     * The depth level of the group in hierarchy
     *
     * @var int
     */
    protected int $level;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
    /**
     * @param string id The group identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The group identifier
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string name The group name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The group name
     */
    function getName() : string
    {
        return $this->name;
    }
    /**
     * @param int type Group's type
     * - `MinGroup::TYPE_SO`
     * - `MinGroup::TYPE_OTHER`
     * - `MinGroup::TYPE_SVNO`
     * - `MinGroup::TYPE_PARTNERS`
     * - `MinGroup::TYPE_NIP`
     * - `MinGroup::TYPE_DIST`
     * - `MinGroup::TYPE_CHANNEL`
     * - `MinGroup::TYPE_STARTER`
     * - `MinGroup::TYPE_PARTNER`
     */
    function setType(int $type)
    {
        $this->type = $type;
    }
    /**
     * @return int Group's type
     * - `MinGroup::TYPE_SO`
     * - `MinGroup::TYPE_OTHER`
     * - `MinGroup::TYPE_SVNO`
     * - `MinGroup::TYPE_PARTNERS`
     * - `MinGroup::TYPE_NIP`
     * - `MinGroup::TYPE_DIST`
     * - `MinGroup::TYPE_CHANNEL`
     * - `MinGroup::TYPE_STARTER`
     * - `MinGroup::TYPE_PARTNER`
     */
    function getType() : int
    {
        return $this->type;
    }
    /**
     * @param int level The depth level of the group in hierarchy
     */
    function setLevel(int $level)
    {
        $this->level = $level;
    }
    /**
     * @return int The depth level of the group in hierarchy
     */
    function getLevel() : int
    {
        return $this->level;
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