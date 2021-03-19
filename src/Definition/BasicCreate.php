<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupCreate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Basic group's create properties
 */
class BasicCreate extends CommonGroupCreate
{
    use BillableGroup;
}