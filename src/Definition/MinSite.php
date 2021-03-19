<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Actions;
class MinSite
{
    /**
     * The site's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The site's name
     *
     * @var string
     */
    protected string $name;
    /** @var Actions */
    protected Actions $actions;
}