<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
/**
 * Minimal information about a provider
 */
class MinProvider
{
    /**
     * The provider identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The provider name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
}