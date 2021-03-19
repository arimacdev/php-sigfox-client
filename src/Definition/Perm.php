<?php

namespace Arimac\Sigfox\Definition;

/**
 * Information about a Permission
 */
class Perm
{
    /**
     * The permission's code
     */
    protected int $code;
    /**
     * The permission's name
     */
    protected string $name;
    /**
     * The permission's description (in english)
     */
    protected string $description;
}