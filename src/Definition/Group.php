<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition;
/**
 * Defines the group's generic properties
 */
class Group extends Definition
{
    /** SO */
    public const TYPE_SO = 0;
    /** Basic */
    public const TYPE_BASIC = 2;
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
     * The group's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The group's description
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * Group's type
     * - `Group::TYPE_SO`
     * - `Group::TYPE_BASIC`
     * - `Group::TYPE_SVNO`
     * - `Group::TYPE_PARTNERS`
     * - `Group::TYPE_NIP`
     * - `Group::TYPE_DIST`
     * - `Group::TYPE_CHANNEL`
     * - `Group::TYPE_STARTER`
     * - `Group::TYPE_PARTNER`
     *
     * @var int
     */
    protected ?int $type = null;
    /**
     * The timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
     *
     * @var string
     */
    protected ?string $timezone = null;
    /**
     * The group's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The group's name to ascii and lowercase
     *
     * @var string
     */
    protected ?string $nameCI = null;
    /**
     * The group's path sorted by descending ancestor {id} (direct parent to farthest parent), restricted to the groups visible by the API user
     *
     * @var MinGroup[]
     */
    protected ?array $path = null;
    /**
     * The user id of the group's creator
     *
     * @var string
     */
    protected ?string $createdBy = null;
    /**
     * The creation date of the group (timestamp in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * true if the group is leaf
     *
     * @var bool
     */
    protected ?bool $leaf = null;
    /** @var string[] */
    protected ?array $actions = null;
    /**
     * @param string $name The group's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The group's name
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string $description The group's description
     */
    function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string The group's description
     */
    function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param int $type Group's type
     * - `Group::TYPE_SO`
     * - `Group::TYPE_BASIC`
     * - `Group::TYPE_SVNO`
     * - `Group::TYPE_PARTNERS`
     * - `Group::TYPE_NIP`
     * - `Group::TYPE_DIST`
     * - `Group::TYPE_CHANNEL`
     * - `Group::TYPE_STARTER`
     * - `Group::TYPE_PARTNER`
     */
    function setType(?int $type)
    {
        $this->type = $type;
    }
    /**
     * @return int Group's type
     * - `Group::TYPE_SO`
     * - `Group::TYPE_BASIC`
     * - `Group::TYPE_SVNO`
     * - `Group::TYPE_PARTNERS`
     * - `Group::TYPE_NIP`
     * - `Group::TYPE_DIST`
     * - `Group::TYPE_CHANNEL`
     * - `Group::TYPE_STARTER`
     * - `Group::TYPE_PARTNER`
     */
    function getType() : ?int
    {
        return $this->type;
    }
    /**
     * @param string $timezone The timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
     */
    function setTimezone(?string $timezone)
    {
        $this->timezone = $timezone;
    }
    /**
     * @return string The timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
     */
    function getTimezone() : ?string
    {
        return $this->timezone;
    }
    /**
     * @param string $id The group's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The group's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param string $nameCI The group's name to ascii and lowercase
     */
    function setNameCI(?string $nameCI)
    {
        $this->nameCI = $nameCI;
    }
    /**
     * @return string The group's name to ascii and lowercase
     */
    function getNameCI() : ?string
    {
        return $this->nameCI;
    }
    /**
     * @param MinGroup[] $path The group's path sorted by descending ancestor {id} (direct parent to farthest parent), restricted to the groups visible by the API user
     */
    function setPath(?array $path)
    {
        $this->path = $path;
    }
    /**
     * @return MinGroup[] The group's path sorted by descending ancestor {id} (direct parent to farthest parent), restricted to the groups visible by the API user
     */
    function getPath() : ?array
    {
        return $this->path;
    }
    /**
     * @param string $createdBy The user id of the group's creator
     */
    function setCreatedBy(?string $createdBy)
    {
        $this->createdBy = $createdBy;
    }
    /**
     * @return string The user id of the group's creator
     */
    function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * @param int $creationTime The creation date of the group (timestamp in milliseconds since Unix Epoch)
     */
    function setCreationTime(?int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int The creation date of the group (timestamp in milliseconds since Unix Epoch)
     */
    function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * @param bool $leaf true if the group is leaf
     */
    function setLeaf(?bool $leaf)
    {
        $this->leaf = $leaf;
    }
    /**
     * @return bool true if the group is leaf
     */
    function getLeaf() : ?bool
    {
        return $this->leaf;
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
}