<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
/**
 * Defines a contact entity
 */
class MinContact
{
    /**
     * The contact's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The contact's name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
}