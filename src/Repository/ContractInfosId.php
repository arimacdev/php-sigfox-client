<?php

namespace Arimac\Sigfox\Repository;

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
     * Retrieve information about a given contract.
     *
     * @param int $request
     * @return int
     */
    function get(int $request) : int
    {
        return $this->client->request('get', '/contract-infos/{id}', $request, 'int');
    }
    /**
     * Create an async job to restart the devices associated to a contract.
     *
     * @param int $request
     * @return int
     */
    function bulkRestart(int $request) : int
    {
        return $this->client->request('post', '/contract-infos/{id}/bulk/restart', $request, 'int');
    }
}