<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ContractInfosIdBulk;
use Arimac\Sigfox\Repository\ContractInfosIdDevices;
class ContractInfosId
{
    /**
     * The Contract identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Contract identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return ContractInfosIdBulk
     */
    public function bulk() : ContractInfosIdBulk
    {
        return new ContractInfosIdBulk($this->id);
    }
    /**
     * @return ContractInfosIdDevices
     */
    public function devices() : ContractInfosIdDevices
    {
        return new ContractInfosIdDevices($this->id);
    }
}