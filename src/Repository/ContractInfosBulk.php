<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ContractInfosBulkRestart;
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