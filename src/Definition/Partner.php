<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
    protected ?int $currentPrototypeCount = null;
    protected array $validations = array('currentPrototypeCount' => array('min:0', 'numeric', 'nullable'));
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
    public function getCurrentPrototypeCount() : ?int
    {
        return $this->currentPrototypeCount;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('currentPrototypeCount' => new PrimitiveSerializer(self::class, 'currentPrototypeCount', 'int'));
    }
}