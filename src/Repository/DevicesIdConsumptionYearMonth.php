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
}