<?php

namespace Arimac\Sigfox\Repository;

class ContractInfosIdBulkRestart
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
}