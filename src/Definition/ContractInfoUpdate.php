<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
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
     * Setter for orderName
     *
     * @param string $orderName The order name, if any. This field can be unset when updating.
     *
     * @return self To use in method chains
     */
    public function setOrderName(?string $orderName) : self
    {
        $this->orderName = $orderName;
        return $this;
    }
    /**
     * Getter for orderName
     *
     * @return string The order name, if any. This field can be unset when updating.
     */
    public function getOrderName() : ?string
    {
        return $this->orderName;
    }
    /**
     * Setter for blacklistedTerritories
     *
     * @param string[] $blacklistedTerritories The list of "blacklisted" territories, as an array of NIP group IDs.
     *
     * @return self To use in method chains
     */
    public function setBlacklistedTerritories(?array $blacklistedTerritories) : self
    {
        $this->blacklistedTerritories = $blacklistedTerritories;
        return $this;
    }
    /**
     * Getter for blacklistedTerritories
     *
     * @return string[] The list of "blacklisted" territories, as an array of NIP group IDs.
     */
    public function getBlacklistedTerritories() : ?array
    {
        return $this->blacklistedTerritories;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('orderName' => new PrimitiveSerializer(self::class, 'orderName', 'string'), 'blacklistedTerritories' => new ArraySerializer(self::class, 'blacklistedTerritories', new PrimitiveSerializer(self::class, 'blacklistedTerritories', 'string')));
    }
}