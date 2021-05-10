<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines the Partners group type properties
 */
class Partners extends Group
{
    use BillableGroup;
    /**
     * Number of prototype registered. Accessible only for groups under SO
     *
     * @var int
     */
    protected ?int $currentPrototypeCount = null;
    /**
     * Setter for currentPrototypeCount
     *
     * @param int $currentPrototypeCount Number of prototype registered. Accessible only for groups under SO
     *
     * @return self To use in method chains
     */
    public function setCurrentPrototypeCount(?int $currentPrototypeCount) : self
    {
        $this->currentPrototypeCount = $currentPrototypeCount;
        return $this;
    }
    /**
     * Getter for currentPrototypeCount
     *
     * @return int Number of prototype registered. Accessible only for groups under SO
     */
    public function getCurrentPrototypeCount() : int
    {
        return $this->currentPrototypeCount;
    }
}