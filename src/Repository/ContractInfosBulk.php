<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
class ContractInfosBulk extends Repository
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * @return ContractInfosBulkRestart
     */
    public function restart() : ContractInfosBulkRestart
    {
        return new ContractInfosBulkRestart($this->client);
    }
}