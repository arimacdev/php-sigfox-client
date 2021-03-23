<?php

namespace Arimac\Sigfox\Repository;

class DeviceTypesIdCallbacksCallbackId
{
    /**
     * The Device Type identifier (hexademical format)
     */
    protected string $id;
    /**
     * The Callback identifier
     */
    protected string $callbackId;
    /**
     * Creating the repository
     *
     * @param string $id The Device Type identifier (hexademical format)
     * @param string $callbackId The Callback identifier
     */
    function __construct(string $id, string $callbackId)
    {
        $this->id = $id;
        $this->callbackId = $callbackId;
    }
}