<?php

namespace Arimac\Sigfox\Repository;

class DeviceTypesIdCallbacksNotDelivered
{
    /**
     * The Device Type identifier (hexademical format)
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device Type identifier (hexademical format)
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
}