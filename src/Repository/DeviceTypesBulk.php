<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class DeviceTypesBulk
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * @return DeviceTypesBulkRestart
     */
    public function restart() : DeviceTypesBulkRestart
    {
        return new DeviceTypesBulkRestart($this->client);
    }
}