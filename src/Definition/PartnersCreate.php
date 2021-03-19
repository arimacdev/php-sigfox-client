<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonGroupCreate;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Partners group's create properties
 */
class PartnersCreate extends CommonGroupCreate
{
    use BillableGroup;
}