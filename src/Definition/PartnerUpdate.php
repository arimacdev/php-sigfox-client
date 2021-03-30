<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupUpdate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Partner group's update properties
 */
class PartnerUpdate extends CommonGroupUpdate
{
    use BillableGroup;
}