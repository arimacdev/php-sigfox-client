<?php

namespace Arimac\Sigfox\Definition;

/**
 * Returned data for Service Coverage Available Entities API
 */
class AvailableEntitiesResponse
{
    /**
     * Array of operators infos and their forecast radio planning infos
     */
    protected array $operators;
    /**
     * Array of device class infos.
     */
    protected array $classes;
}