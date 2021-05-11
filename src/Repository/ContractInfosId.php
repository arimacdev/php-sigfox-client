<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\ContractInfosIdGet;
use Arimac\Sigfox\Request\ContractInfosIdDevices;
class ContractInfosId
{
    /**
     * The Contract identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Contract identifier
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve information about a given contract.
     * 
     */
    public function get(ContractInfosIdGet $request) : int
    {
        return $this->client->request('get', $this->bind('/contract-infos/{id}', $this->id), $request, 'int');
    }
    /**
     * Create an async job to restart the devices associated to a contract.
     * 
     */
    public function bulkRestart() : int
    {
        return $this->client->request('post', $this->bind('/contract-infos/{id}/bulk/restart', $this->id), null, 'int');
    }
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     * 
     */
    public function devices(ContractInfosIdDevices $request) : int
    {
        return $this->client->request('get', $this->bind('/contract-infos/{id}/devices', $this->id), $request, 'int');
    }
}