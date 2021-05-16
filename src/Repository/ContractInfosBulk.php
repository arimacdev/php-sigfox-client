<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class ContractInfosBulk
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
     * @return ContractInfosBulkRestart
     */
    public function restart() : ContractInfosBulkRestart
    {
        return new ContractInfosBulkRestart($this->client);
    }
}