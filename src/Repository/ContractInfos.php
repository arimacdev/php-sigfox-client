<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\ContractInfosId;
use Arimac\Sigfox\Repository\ContractInfosBulk;
class ContractInfos
{
    /**
     * Retrieve a list of contracts according to visibility permissions and request filters.
     *
     * @param int $request
     * @return int
     */
    function list(int $request) : int
    {
        return $this->client->request('get', '/contract-infos/', $request, 'int');
    }
    /**
     * @param string $id The Contract identifier
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