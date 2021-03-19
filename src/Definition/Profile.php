<?php

namespace Arimac\Sigfox\Definition;

class Profile
{
    /**
     * The profiler identifier
     */
    protected string $id;
    /**
     * The profile name
     */
    protected string $name;
    /**
     * Lists the role contained in this profile.
     */
    protected array $roles;
}