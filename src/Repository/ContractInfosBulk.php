<?php

namespace Arimac\Sigfox\Repository;

class ContractInfosBulk
{
    /**
     * @return ContractInfosBulkRestart
     */
    public function restart() : ContractInfosBulkRestart
    {
        return new ContractInfosBulkRestart();
    }
}