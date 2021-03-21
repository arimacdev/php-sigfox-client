<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * generic information about a Role
 */
class CommonRole extends Definition
{
    /** ROLE */
    public const TYPE_ROLE = 0;
    /** META_EMPTY */
    public const TYPE_META_EMPTY = 1;
    /** META */
    public const TYPE_META = 2;
    /**
     * the role's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Token's type of role
     * - `CommonRole::TYPE_ROLE`
     * - `CommonRole::TYPE_META_EMPTY`
     * - `CommonRole::TYPE_META`
     *
     * @var int
     */
    protected ?int $type = null;
    /**
     * @param string $name the role's name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string the role's name
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param int $type Token's type of role
     * - `CommonRole::TYPE_ROLE`
     * - `CommonRole::TYPE_META_EMPTY`
     * - `CommonRole::TYPE_META`
     */
    function setType(?int $type)
    {
        $this->type = $type;
    }
    /**
     * @return int Token's type of role
     * - `CommonRole::TYPE_ROLE`
     * - `CommonRole::TYPE_META_EMPTY`
     * - `CommonRole::TYPE_META`
     */
    function getType() : ?int
    {
        return $this->type;
    }
}