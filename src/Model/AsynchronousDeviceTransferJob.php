<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model\AsynchronousDeviceTransferJob\DataItem;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\ChildSet;
class AsynchronousDeviceTransferJob extends Model
{
    /**
     * The device type where new devices will be transfered
     *
     * @var string
     */
    protected ?string $deviceTypeId = null;
    /**
     * @var DataItem[]
     */
    protected ?array $data = null;
    /**
     * Setter for deviceTypeId
     *
     * @param string $deviceTypeId The device type where new devices will be transfered
     *
     * @return self To use in method chains
     */
    public function setDeviceTypeId(?string $deviceTypeId) : self
    {
        $this->deviceTypeId = $deviceTypeId;
        return $this;
    }
    /**
     * Getter for deviceTypeId
     *
     * @return string The device type where new devices will be transfered
     */
    public function getDeviceTypeId() : ?string
    {
        return $this->deviceTypeId;
    }
    /**
     * Setter for data
     *
     * @param DataItem[] $data
     *
     * @return self To use in method chains
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Getter for data
     *
     * @return DataItem[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('deviceTypeId' => new PrimitiveSerializer('string'), 'data' => new ArraySerializer(new ClassSerializer(DataItem::class)));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('deviceTypeId' => array(new Required()), 'data' => array(new ChildSet()));
        return $rules;
    }
}