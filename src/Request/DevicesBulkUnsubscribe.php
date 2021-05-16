<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\BulkUnsubscribe;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Unsubscribe multiple devices with asynchronous job.
 */
class DevicesBulkUnsubscribe extends Request
{
    /**
     * array of device's identifier (hexadecimal format) with unsubscribtion time
     *
     * @var BulkUnsubscribe
     */
    protected ?BulkUnsubscribe $devices = null;
    /**
     * Group Identifier use to unsubscribe multiple devices
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * @internal
     */
    protected array $query = array('groupId');
    /**
     * @internal
     */
    protected array $body = array('devices');
    /**
     * @internal
     */
    protected array $validations = array('devices' => array('required'));
    /**
     * Setter for devices
     *
     * @param BulkUnsubscribe $devices array of device's identifier (hexadecimal format) with unsubscribtion time
     *
     * @return self To use in method chains
     */
    public function setDevices(?BulkUnsubscribe $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * Getter for devices
     *
     * @return BulkUnsubscribe array of device's identifier (hexadecimal format) with unsubscribtion time
     */
    public function getDevices() : ?BulkUnsubscribe
    {
        return $this->devices;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId Group Identifier use to unsubscribe multiple devices
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @return string Group Identifier use to unsubscribe multiple devices
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('devices' => new ClassSerializer(self::class, 'devices', BulkUnsubscribe::class), 'groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'));
    }
}