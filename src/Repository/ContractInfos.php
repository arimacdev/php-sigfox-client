<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ContractInfosId;
class ContractInfos
{
    /**
     * @param string $id The Contract identifier
     * @return ContractInfosId
     */
    public function find(string $id) : ContractInfosId
    {
        return new ContractInfosId($id);
    }
}