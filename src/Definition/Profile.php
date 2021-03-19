<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinRole;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
class Profile
{
    /**
     * The profiler identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The profile name
     *
     * @var string
     */
    protected string $name;
    /** @var MinGroup */
    protected MinGroup $group;
    /**
     * Lists the role contained in this profile.
     *
     * @var MinRole[]
     */
    protected array $roles;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}