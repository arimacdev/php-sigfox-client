<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesIdMessagesMetric;
class DevicesIdMessages
{
    /**
     * The Device identifier (hexadecimal format)
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return DevicesIdMessagesMetric
     */
    public function metric() : DevicesIdMessagesMetric
    {
        return new DevicesIdMessagesMetric($this->id);
    }
}