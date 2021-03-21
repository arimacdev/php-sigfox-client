<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonRole;
class RoleCreate extends CommonRole
{
    /**
     * The role's parent's identifier
     *
     * @var string
     */
    protected ?string $parentRoleId = null;
    /**
     * the permisions included in this role, if the role is not META or META_EMPTY type,
     *
     * @var int[]
     */
    protected ?array $perms = null;
    /**
     * @param string $parentRoleId The role's parent's identifier
     */
    function setParentRoleId(?string $parentRoleId)
    {
        $this->parentRoleId = $parentRoleId;
    }
    /**
     * @return string The role's parent's identifier
     */
    function getParentRoleId() : ?string
    {
        return $this->parentRoleId;
    }
    /**
     * @param int[] $perms the permisions included in this role, if the role is not META or META_EMPTY type,
     */
    function setPerms(?array $perms)
    {
        $this->perms = $perms;
    }
    /**
     * @return int[] the permisions included in this role, if the role is not META or META_EMPTY type,
     */
    function getPerms() : ?array
    {
        return $this->perms;
    }
}