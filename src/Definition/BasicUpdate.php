<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupUpdate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Basic group's update properties
 */
class BasicUpdate extends CommonGroupUpdate
{
    use BillableGroup;
}