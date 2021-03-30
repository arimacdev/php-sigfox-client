<?php

namespace Arimac\Sigfox\Repository;

class DevicesIdConsumptionYearMonth
{
    /**
     * The Device identifier (hexadecimal format)
     */
    protected string $id;
    /**
     * The year of consumption
     */
    protected int $year;
    /**
     * The month of consumption
     */
    protected int $month;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     * @param int $year The year of consumption
     * @param int $month The month of consumption
     */
    function __construct(string $id, int $year, int $month)
    {
        $this->id = $id;
        $this->year = $year;
        $this->month = $month;
    }
    /**
     * Retrieve a device's consumption for a given month during a given year.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/devices/{id}/consumption/{year}/{month}', $request, 'int');
    }
    /**
     * Disable sequence number check for the next message.
     *
     * @param int $request
     * @return int
     */
    function disengage(int $request) : int
    {
        return $this->client->request('post', '/devices/{id}/disengage', $request, 'int');
    }
}