<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupUpdate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Starter group's update properties
 */
class StarterUpdate extends CommonGroupUpdate
{
    use BillableGroup;
}