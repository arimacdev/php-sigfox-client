<?php

namespace Arimac\Sigfox\Repository;

class DevicesIdConsumption
{
    /**
     * The Device identifier (hexadecimal format)
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Device identifier (hexadecimal format)
     */
    public function __construct(string $id)
    {
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
        return new DevicesIdConsumptionYear($this->id, $year);
    }
}