<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupCreate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Partner group's create properties
 */
class PartnerCreate extends CommonGroupCreate
{
    use BillableGroup;
}