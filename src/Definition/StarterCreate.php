<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupCreate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Starter group's create properties
 */
class StarterCreate extends CommonGroupCreate
{
    use BillableGroup;
}