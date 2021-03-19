<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinMetaRole;
/**
 * Defines a role entity
 */
class MinRole
{
    /**
     * The role's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The role's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The roles's path sorted by descending ancestor (direct parent to farest parent)
     *
     * @var MinMetaRole[]
     */
    protected array $path;
}