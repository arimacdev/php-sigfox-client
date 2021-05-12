<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Definition\DeviceConsumption;
class DevicesIdConsumptionYear
{
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
     * @param string $id The Device identifier (hexadecimal format)
     * @param string $year The year of consumption
     */
    public function __construct(string $id, string $year)
    {
        $this->id = $id;
        $this->year = $year;
    }
    /**
     * Retrieve a device's consumption for a given year.
     * 
     */
    public function get() : DeviceConsumption
    {
        return $this->client->request('get', $this->bind('/devices/{id}/consumption/{year}', $this->id, $this->year), null, DeviceConsumption::class);
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
        return new DevicesIdConsumptionYearMonth($this->id, $this->year, $month);
    }
}