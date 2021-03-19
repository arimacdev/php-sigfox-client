<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
/**
 * Returned data for Service Coverage Available Entities API
 */
class AvailableEntitiesResponse
{
    /**
     * Array of operators infos and their forecast radio planning infos
     *
     * @var array
     */
    protected array $operators;
    /**
     * Array of device class infos.
     *
     * @var array
     */
    protected array $classes;
    /** @var Actions */
    protected Actions $actions;
}