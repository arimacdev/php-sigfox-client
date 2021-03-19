<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonContractInfo;
class ContractInfoUpdate extends CommonContractInfo
{
    /**
     * The order name, if any. This field can be unset when updating.
     *
     * @var string
     */
    protected string $orderName;
    /**
     * The list of "blacklisted" territories, as an array of NIP group IDs.
     *
     * @var string[]
     */
    protected array $blacklistedTerritories;
}