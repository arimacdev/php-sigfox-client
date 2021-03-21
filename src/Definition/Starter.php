<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\Group;
use Arimac\Sigfox\Definition\BillableGroup;
/**
 * Defines the Starter group type properties
 */
class Starter extends Group
{
    use BillableGroup;
    /**
     * Number of prototype registered. Accessible only for groups under SO
     *
     * @var int
     */
    protected ?int $currentPrototypeCount = null;
    /**
     * @param int $currentPrototypeCount Number of prototype registered. Accessible only for groups under SO
     */
    function setCurrentPrototypeCount(?int $currentPrototypeCount)
    {
        $this->currentPrototypeCount = $currentPrototypeCount;
    }
    /**
     * @return int Number of prototype registered. Accessible only for groups under SO
     */
    function getCurrentPrototypeCount() : ?int
    {
        return $this->currentPrototypeCount;
    }
}