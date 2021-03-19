<?php

namespace Arimac\Sigfox\Definition;

class CommonGroupCreate
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
    protected string $name;
    /**
     * The group's description
     *
     * @var string
     */
    protected string $description;
    /**
     * Group's type:
     * - `CommonGroupCreate::TYPE_SO`
     * - `CommonGroupCreate::TYPE_OTHER`
     * - `CommonGroupCreate::TYPE_SVNO`
     * - `CommonGroupCreate::TYPE_PARTNERS`
     * - `CommonGroupCreate::TYPE_NIP`
     * - `CommonGroupCreate::TYPE_DIST`
     * - `CommonGroupCreate::TYPE_CHANNEL`
     * - `CommonGroupCreate::TYPE_STARTER`
     * - `CommonGroupCreate::TYPE_PARTNER`
     *
     * @var int
     */
    protected int $type;
    /**
     * The group's timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
     *
     * @var string
     */
    protected string $timezone;
    /**
     * The parent group id
     *
     * @var string
     */
    protected string $parentId;
}