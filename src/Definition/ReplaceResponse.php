<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\ReplaceResponse\Status;
use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
class ReplaceResponse extends Definition
{
    /**
     * The total number of devices to be replaced
     *
     * @var int
     */
    protected ?int $total = null;
    /**
     * The information about the devices already processed
     *
     * @var Status
     */
    protected ?Status $status = null;
    /**
     * Setter for total
     *
     * @param int $total The total number of devices to be replaced
     *
     * @return self To use in method chains
     */
    public function setTotal(?int $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * Getter for total
     *
     * @return int The total number of devices to be replaced
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * Setter for status
     *
     * @param Status $status The information about the devices already processed
     *
     * @return self To use in method chains
     */
    public function setStatus(?Status $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Getter for status
     *
     * @return Status The information about the devices already processed
     */
    public function getStatus() : ?Status
    {
        return $this->status;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('total' => new PrimitiveSerializer(self::class, 'total', 'int'), 'status' => new ClassSerializer(self::class, 'status', Status::class));
    }
}