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
    protected ?string $orderName = null;
    /**
     * The list of "blacklisted" territories, as an array of NIP group IDs.
     *
     * @var string[]
     */
    protected ?array $blacklistedTerritories = null;
    /**
     * @param string $orderName The order name, if any. This field can be unset when updating.
     */
    function setOrderName(?string $orderName)
    {
        $this->orderName = $orderName;
    }
    /**
     * @return string The order name, if any. This field can be unset when updating.
     */
    function getOrderName() : ?string
    {
        return $this->orderName;
    }
    /**
     * @param string[] $blacklistedTerritories The list of "blacklisted" territories, as an array of NIP group IDs.
     */
    function setBlacklistedTerritories(?array $blacklistedTerritories)
    {
        $this->blacklistedTerritories = $blacklistedTerritories;
    }
    /**
     * @return string[] The list of "blacklisted" territories, as an array of NIP group IDs.
     */
    function getBlacklistedTerritories() : ?array
    {
        return $this->blacklistedTerritories;
    }
}