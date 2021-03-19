<?php

namespace Arimac\Sigfox\Definition;

/**
 * generic information about a Role
 */
class CommonRole
{
    /** ROLE */
    public const TYPE_ROLE = 0;
    /** META_EMPTY */
    public const TYPE_META_EMPTY = 1;
    /** META */
    public const TYPE_META = 2;
    /**
     * the role's name
     */
    protected string $name;
    /**
     * Token's type of role
     * - `CommonRole::TYPE_ROLE`
     * - `CommonRole::TYPE_META_EMPTY`
     * - `CommonRole::TYPE_META`
     */
    protected int $type;
}