<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\ContractInfosList;
class ContractInfos
{
    /**
     * Retrieve a list of contracts according to visibility permissions and request filters.
     * 
     */
    public function list(ContractInfosList $request) : int
    {
        return $this->client->request('get', '/contract-infos/', $request, 'int');
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
        return new ContractInfosId($id);
    }
    /**
     * @return ContractInfosBulk
     */
    public function bulk() : ContractInfosBulk
    {
        return new ContractInfosBulk();
    }
}