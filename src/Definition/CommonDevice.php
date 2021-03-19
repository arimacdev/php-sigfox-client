<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the device's common properties for reading or creation (not update)
 */
class CommonDevice
{
    /**
     * The device's identifier (hexadecimal format)
     */
    protected ?string $id;
    /**
     * The device's name
     */
    protected ?string $name;
}