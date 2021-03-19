<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Information about a Permission
 */
class Perm
{
    /**
     * The permission's code
     *
     * @var int
     */
    protected int $code;
    /**
     * The permission's name
     *
     * @var string
     */
    protected string $name;
    /**
     * The permission's description (in english)
     *
     * @var string
     */
    protected string $description;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}