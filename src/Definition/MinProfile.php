<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
/**
 * Defines a profile entity
 */
class MinProfile
{
    /**
     * The profile's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The profile's name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
}