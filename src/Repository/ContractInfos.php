<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ContractInfosId;
use Arimac\Sigfox\Repository\ContractInfosBulk;
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
    /**
     * @return ContractInfosBulk
     */
    public function bulk() : ContractInfosBulk
    {
        return new ContractInfosBulk();
    }
}