<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class DevicesIdConsumption
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
    /**
     * The Device identifier (hexadecimal format)
     *
     * @internal
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     * @param string $id     The Device identifier (hexadecimal format)
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Find by year
     *
     * @param string $year The year of consumption
     *
     * @return DevicesIdConsumptionYear
     */
    public function year(string $year) : DevicesIdConsumptionYear
    {
        return new DevicesIdConsumptionYear($this->client, $this->id, $year);
    }
}