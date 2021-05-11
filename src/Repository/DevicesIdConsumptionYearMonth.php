<?php

namespace Arimac\Sigfox\Repository;

class DevicesIdConsumptionYearMonth
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
     * The month of consumption
     */
    protected ?string $month;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     * @param string $year The year of consumption
     * @param string $month The month of consumption
     */
    public function __construct(string $id, string $year, string $month)
    {
        $this->id = $id;
        $this->year = $year;
        $this->month = $month;
    }
    /**
     * Retrieve a device's consumption for a given month during a given year.
     * 
     */
    public function get() : int
    {
        return $this->client->request('get', $this->bind('/devices/{id}/consumption/{year}/{month}', $this->id, $this->year, $this->month), null, 'int');
    }
}