<?php

namespace Arimac\Sigfox\Definition;

class AsynchronousDeviceTransferJob
{
    /**
     * The device type where new devices will be transfered
     *
     * @var string
     */
    protected string $deviceTypeId;
    /** @var array */
    protected ?array $data;
}