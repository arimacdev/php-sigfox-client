<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\DevicesIdConsumptionYear;
class DevicesIdConsumption
{
    /**
     * The Device identifier (hexadecimal format)
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @param int $year The year of consumption
     * @return DevicesIdConsumptionYear
     */
    public function year(int $year) : DevicesIdConsumptionYear
    {
        return new DevicesIdConsumptionYear($this->id, $year);
    }
}