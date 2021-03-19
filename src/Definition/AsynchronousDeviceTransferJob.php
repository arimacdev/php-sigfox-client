<?php

namespace Arimac\Sigfox\Definition;

class AsynchronousDeviceTransferJob
{
    /**
     * The device type where new devices will be transfered
     */
    protected ?string $deviceTypeId;
    protected array $data;
}