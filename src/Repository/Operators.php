<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
class Operators
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected Client $client;
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
     * Find by id
     *
     * @param string $id The Operator id (hexademical format)
     *
     * @return OperatorsId
     */
    public function find(string $id) : OperatorsId
    {
        return new OperatorsId($this->client, $id);
    }
}