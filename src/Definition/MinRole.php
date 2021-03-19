<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines a role entity
 */
class MinRole
{
    /**
     * The role's identifier
     */
    protected string $id;
    /**
     * The role's name
     */
    protected string $name;
    /**
     * The roles's path sorted by descending ancestor (direct parent to farest parent)
     */
    protected array $path;
}