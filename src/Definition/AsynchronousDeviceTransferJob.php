<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\AsynchronousDeviceTransferJob\DataItem;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class AsynchronousDeviceTransferJob extends Definition
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'deviceTypeId', 'string'), new ArraySerializer(self::class, 'data', new ClassSerializer(self::class, 'data', DataItem::class)));
    protected $validations = array('deviceTypeId' => array('required'));
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
    public function getDeviceTypeId() : string
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
    public function getData() : array
    {
        return $this->data;
    }
}