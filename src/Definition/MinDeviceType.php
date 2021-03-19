<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Defines a minimum contract info entity
 */
class MinDeviceType
{
    /**
     * The device type info's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The device type info's name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}