<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupCreate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Channel group's create properties
 */
class ChannelCreate extends CommonGroupCreate
{
    use BillableGroup;
}