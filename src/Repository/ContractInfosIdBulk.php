<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ContractInfosIdBulkRestart;
class ContractInfosIdBulk
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
     * @return ContractInfosIdBulkRestart
     */
    public function restart() : ContractInfosIdBulkRestart
    {
        return new ContractInfosIdBulkRestart($this->id);
    }
}