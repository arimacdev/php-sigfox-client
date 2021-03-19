<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupUpdate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Partners group's update properties
 */
class PartnersUpdate extends CommonGroupUpdate
{
    use BillableGroup;
}