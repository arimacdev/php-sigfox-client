<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\BulkUnsubscribe;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Unsubscribe multiple devices with asynchronous job.
 */
class DevicesBulkUnsubscribeAsync extends Request
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
    protected ?string $body = 'devices';
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
     * @internal
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
     * @internal
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
        $serializers = array('devices' => new ClassSerializer(BulkUnsubscribe::class), 'groupId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('devices' => array(new Required(), new Child()));
        return $rules;
    }
}