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
    protected int $year;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     * @param int $year The year of consumption
     */
    function __construct(string $id, int $year)
    {
        $this->id = $id;
        $this->year = $year;
    }
    /**
     * @param int $month The month of consumption
     * @return DevicesIdConsumptionYearMonth
     */
    public function find(int $month) : DevicesIdConsumptionYearMonth
    {
        return new DevicesIdConsumptionYearMonth($this->id, $this->year, $month);
    }
}