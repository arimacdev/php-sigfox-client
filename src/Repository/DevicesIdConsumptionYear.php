<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Definition\DeviceConsumption;
class DevicesIdConsumptionYear extends Repository
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
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $id     The Device identifier (hexadecimal format)
     * @param string $year   The year of consumption
     */
    public function __construct(Client $client, string $id, string $year)
    {
        $this->client = $client;
        $this->id = $id;
        $this->year = $year;
    }
    /**
     * Retrieve a device's consumption for a given year.
     *
     * @return DeviceConsumption
     */
    public function get() : DeviceConsumption
    {
        return $this->client->call('get', $this->bind('/devices/{id}/consumption/{year}', $this->id, $this->year), null, DeviceConsumption::class);
    }
    /**
     * Find by month
     *
     * @param string $month The month of consumption
     *
     * @return DevicesIdConsumptionYearMonth
     */
    public function month(string $month) : DevicesIdConsumptionYearMonth
    {
        return new DevicesIdConsumptionYearMonth($this->client, $this->id, $this->year, $month);
    }
}