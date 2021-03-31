<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesIdConsumptionYearMonth;
class DevicesIdConsumptionYear
{
    /**
     * The Device identifier (hexadecimal format)
     */
    protected string $id;
    /**
     * The year of consumption
     */
    protected string $year;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     * @param string $year The year of consumption
     */
    function __construct(string $id, string $year)
    {
        $this->id = $id;
        $this->year = $year;
    }
    /**
     * Retrieve a device's consumption for a given year.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}/consumption/{year}', $request, 'int');
    }
    /**
     * @param string $month The month of consumption
     * @return DevicesIdConsumptionYearMonth
     */
    public function month(string $month) : DevicesIdConsumptionYearMonth
    {
        return new DevicesIdConsumptionYearMonth($this->id, $this->year, $month);
    }
}