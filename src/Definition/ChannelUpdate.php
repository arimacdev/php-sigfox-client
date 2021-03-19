<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupUpdate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Channel group's update properties
 */
class ChannelUpdate extends CommonGroupUpdate
{
    use BillableGroup;
}