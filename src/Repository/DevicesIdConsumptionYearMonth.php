<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\DeviceConsumption;
class DevicesIdConsumptionYearMonth extends Repository
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The Device identifier (hexadecimal format)
     */
    protected ?string $id;
    /**
     * The year of consumption
     */
    protected ?string $year;
    /**
     * The month of consumption
     */
    protected ?string $month;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $id     The Device identifier (hexadecimal format)
     * @param string $year   The year of consumption
     * @param string $month  The month of consumption
     */
    public function __construct(Client $client, string $id, string $year, string $month)
    {
        $this->client = $client;
        $this->id = $id;
        $this->year = $year;
        $this->month = $month;
    }
    /**
     * Retrieve a device's consumption for a given month during a given year.
     *
     * @return DeviceConsumption
     */
    public function get() : DeviceConsumption
    {
        return $this->client->call('get', $this->bind('/devices/{id}/consumption/{year}/{month}', $this->id, $this->year, $this->month), null, DeviceConsumption::class);
    }
}