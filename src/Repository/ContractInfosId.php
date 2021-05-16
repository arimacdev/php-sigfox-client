<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ContractInfosIdGet;
use Arimac\Sigfox\Definition\ContractInfo;
use Arimac\Sigfox\Response\Generated\ContractInfosIdBulkRestartResponse;
use Arimac\Sigfox\Request\ContractInfosIdDevices;
use Arimac\Sigfox\Response\Generated\ContractInfosIdDevicesResponse;
class ContractInfosId extends Repository
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
     *
     * @param ContractInfosIdGet $request The query and body parameters to pass
     *
     * @return ContractInfo
     */
    public function get(?ContractInfosIdGet $request = null) : ContractInfo
    {
        return $this->client->call('get', $this->bind('/contract-infos/{id}', $this->id), $request, ContractInfo::class);
    }
    /**
     * Create an async job to restart the devices associated to a contract.
     *
     * @return ContractInfosIdBulkRestartResponse
     */
    public function bulkRestart() : ContractInfosIdBulkRestartResponse
    {
        return $this->client->call('post', $this->bind('/contract-infos/{id}/bulk/restart', $this->id), null, ContractInfosIdBulkRestartResponse::class);
    }
    /**
     * Retrieve a list of devices according to visibility permissions and request filters.
     *
     * @param ContractInfosIdDevices $request The query and body parameters to pass
     *
     * @return ContractInfosIdDevicesResponse
     */
    public function devices(?ContractInfosIdDevices $request = null) : ContractInfosIdDevicesResponse
    {
        return $this->client->call('get', $this->bind('/contract-infos/{id}/devices', $this->id), $request, ContractInfosIdDevicesResponse::class);
    }
}