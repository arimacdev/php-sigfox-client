<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Generic information for group update
 */
class CommonGroupUpdate extends Definition
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
     * - Group's type
     * - `CommonGroupUpdate::TYPE_SO`
     * - `CommonGroupUpdate::TYPE_OTHER`
     * - `CommonGroupUpdate::TYPE_SVNO`
     * - `CommonGroupUpdate::TYPE_PARTNERS`
     * - `CommonGroupUpdate::TYPE_NIP`
     * - `CommonGroupUpdate::TYPE_DIST`
     * - `CommonGroupUpdate::TYPE_CHANNEL`
     * - `CommonGroupUpdate::TYPE_STARTER`
     * - `CommonGroupUpdate::TYPE_PARTNER`
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
     * @param int $type - Group's type
     * - `CommonGroupUpdate::TYPE_SO`
     * - `CommonGroupUpdate::TYPE_OTHER`
     * - `CommonGroupUpdate::TYPE_SVNO`
     * - `CommonGroupUpdate::TYPE_PARTNERS`
     * - `CommonGroupUpdate::TYPE_NIP`
     * - `CommonGroupUpdate::TYPE_DIST`
     * - `CommonGroupUpdate::TYPE_CHANNEL`
     * - `CommonGroupUpdate::TYPE_STARTER`
     * - `CommonGroupUpdate::TYPE_PARTNER`
     */
    function setType(?int $type)
    {
        $this->type = $type;
    }
    /**
     * @return int - Group's type
     * - `CommonGroupUpdate::TYPE_SO`
     * - `CommonGroupUpdate::TYPE_OTHER`
     * - `CommonGroupUpdate::TYPE_SVNO`
     * - `CommonGroupUpdate::TYPE_PARTNERS`
     * - `CommonGroupUpdate::TYPE_NIP`
     * - `CommonGroupUpdate::TYPE_DIST`
     * - `CommonGroupUpdate::TYPE_CHANNEL`
     * - `CommonGroupUpdate::TYPE_STARTER`
     * - `CommonGroupUpdate::TYPE_PARTNER`
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
}