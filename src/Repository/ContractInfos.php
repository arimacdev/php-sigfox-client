<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ContractInfosList;
use Arimac\Sigfox\Response\Generated\ContractInfosListResponse;
class ContractInfos extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Retrieve a list of contracts according to visibility permissions and request filters.
     *
     * @param ContractInfosList $request The query and body parameters to pass
     *
     * @return ContractInfosListResponse
     */
    public function list(?ContractInfosList $request = null) : ContractInfosListResponse
    {
        return $this->client->call('get', '/contract-infos/', $request, ContractInfosListResponse::class);
    }
    /**
     * Find by id
     *
     * @param string $id The Contract identifier
     *
     * @return ContractInfosId
     */
    public function find(string $id) : ContractInfosId
    {
        return new ContractInfosId($this->client, $id);
    }
    /**
     * @return ContractInfosBulk
     */
    public function bulk() : ContractInfosBulk
    {
        return new ContractInfosBulk($this->client);
    }
}