<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonRole;
use Arimac\Sigfox\Definition\MinPerm;
use Arimac\Sigfox\Definition\MinMetaRole;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Information about a Role
 */
class Role extends CommonRole
{
    /**
     * The role's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * the permisions included in this role
     *
     * @var MinPerm[]
     */
    protected array $perms;
    /**
     * The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @var MinMetaRole[]
     */
    protected array $path;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}