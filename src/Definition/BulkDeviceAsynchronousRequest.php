<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the the common information shared by the devices created in an ansychronous bulk request
 */
class BulkDeviceAsynchronousRequest
{
    /**
     * The identifier of the device type under which the new devices will be created
     */
    protected ?string $deviceTypeId;
    /**
     * Value describing if the devices are prototypes
     */
    protected bool $prototype;
    /**
     * Prefix to used in device name
     */
    protected string $prefix;
    protected array $data;
}