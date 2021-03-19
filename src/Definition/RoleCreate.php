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
    protected string $parentRoleId;
    /**
     * the permisions included in this role, if the role is not META or META_EMPTY type,
     *
     * @var int[]
     */
    protected array $perms;
}