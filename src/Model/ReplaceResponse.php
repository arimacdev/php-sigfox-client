<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\ReplaceResponse\Status;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Child;
class ReplaceResponse extends Model
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
     * @return static To use in method chains
     */
    public function setTotal(?int $total)
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
     * @return static To use in method chains
     */
    public function setStatus(?Status $status)
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
        $serializers = array('total' => new PrimitiveSerializer('int'), 'status' => new ClassSerializer(Status::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('status' => array(new Child()));
        return $rules;
    }
}