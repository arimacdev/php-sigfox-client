<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Group;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines Partner group type properties
 */
class Partner extends Group
{
    use BillableGroup;
    /**
     * Number of prototype registered. Accessible only for groups under SO
     *
     * @var int
     */
    protected int $currentPrototypeCount;
}