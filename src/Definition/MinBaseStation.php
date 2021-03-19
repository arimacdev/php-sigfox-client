<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
/**
 * Minimal information about a BaseStation
 */
class MinBaseStation
{
    /**
     * The base station identifier in hexadecimal
     *
     * @var string
     */
    protected string $id;
    /**
     * The base station name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
}