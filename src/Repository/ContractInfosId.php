<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ContractInfosIdGet;
use Arimac\Sigfox\Definition\ContractInfo;
use Arimac\Sigfox\Response\Generated\ContractInfosIdBulkRestartResponse;
use Arimac\Sigfox\Request\ContractInfosIdDevices;
use Arimac\Sigfox\Response\Generated\ContractInfosIdDevicesResponse;
class ContractInfosId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The Contract identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $id     The Contract identifier
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a given contract.
     */
    public function get(ContractInfosIdGet $request) : ContractInfo
    {
        return $this->client->request('get', $this->bind('/contract-infos/{id}', $this->id), $request, ContractInfo::class);
    }
    /**
     * Create an async job to restart the devices associated to a contract.
     */
    public function bulkRestart() : ContractInfosIdBulkRestartResponse
    {
        return $this->client->request('post', $this->bind('/contract-infos/{id}/bulk/restart', $this->id), null, ContractInfosIdBulkRestartResponse::class);
    }
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     */
    public function devices(ContractInfosIdDevices $request) : ContractInfosIdDevicesResponse
    {
        return $this->client->request('get', $this->bind('/contract-infos/{id}/devices', $this->id), $request, ContractInfosIdDevicesResponse::class);
    }
}