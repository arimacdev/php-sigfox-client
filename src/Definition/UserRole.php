<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinProfile;
/**
 * Information about User Role
 */
class UserRole
{
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var MinProfile */
    protected MinProfile $profile;
}