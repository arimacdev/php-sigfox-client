<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\DeviceActionJob;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Resume multiple devices with asynchronous job.
 */
class DevicesBulkResume extends Request
{
    /**
     * list of device's identifier (hexadecimal format)
     *
     * @var DeviceActionJob
     */
    protected ?DeviceActionJob $devices = null;
    /**
     * Group Identifier use to resume multiple devices
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
     * Setter for devices
     *
     * @param DeviceActionJob $devices list of device's identifier (hexadecimal format)
     *
     * @return self To use in method chains
     */
    public function setDevices(?DeviceActionJob $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * Getter for devices
     *
     * @internal
     *
     * @return DeviceActionJob list of device's identifier (hexadecimal format)
     */
    public function getDevices() : ?DeviceActionJob
    {
        return $this->devices;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId Group Identifier use to resume multiple devices
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
     * @return string Group Identifier use to resume multiple devices
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
        $serializers = array('devices' => new ClassSerializer(DeviceActionJob::class), 'groupId' => new PrimitiveSerializer('string'));
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