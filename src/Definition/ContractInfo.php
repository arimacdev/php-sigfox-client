<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonContractInfo;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinContractInfo;
use Arimac\Sigfox\Definition\MinGroup;
/**
 * Defines all the contract properties.
 */
class ContractInfo extends CommonContractInfo
{
    /**
     * The contract ID.
     *
     * @var string
     */
    protected string $id;
    /**
     * The contract external ID. It's used to identify the contract info in EDRs.
     *
     * @var string
     */
    protected string $contractId;
    /**
     * The ID of the user who created the contract in BSS.
     *
     * @var string
     */
    protected string $userId;
    /** @var MinGroup */
    protected MinGroup $group;
    /** @var MinContractInfo */
    protected MinContractInfo $order;
    /**
     * The pricing model used by this contract info. - 1 -> Pricing model version 1. - 2 -> Pricing model version 2. - 3 -> Pricing model version 3.
     *
     * @var int
     */
    protected int $pricingModel;
    /**
     * The user id of contract's creator
     *
     * @var string
     */
    protected string $createdBy;
    /**
     * Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected int $lastEditionTime;
    /**
     * Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * The user id of the contract last editor
     *
     * @var string
     */
    protected string $lastEditedBy;
    /**
     * The start time (in milliseconds) of the contract
     *
     * @var int
     */
    protected int $startTime;
    /**
     * The contract timezone name as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica").
     *
     * @var string
     */
    protected string $timezone;
    /**
     * The contract info subscription plan. - 0 -> Free order - 1 -> Pay As You Grow (PAYG) - 2 -> Committed Volume Plan (CVP) - 3 -> Flexible Committed Volume Plan (CVP Flex)
     *
     * @var int
     */
    protected int $subscriptionPlan;
    /**
     * The token duration in months. Must be >= 0. 0 means unlimited time.
     *
     * @var int
     */
    protected int $tokenDuration;
    /**
     * The list of "blacklisted" territories, as an array of NIP groups.
     *
     * @var MinGroup[]
     */
    protected array $blacklistedTerritories;
    /**
     * The number of tokens in use.
     *
     * @var int
     */
    protected int $tokensInUse;
    /**
     * The number of tokens used (expired or revoked).
     *
     * @var int
     */
    protected int $tokensUsed;
    /**
     * @param string id The contract ID.
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The contract ID.
     */
    function getId() : string
    {
        return $this->id;
    }
    /**
     * @param string contractId The contract external ID. It's used to identify the contract info in EDRs.
     */
    function setContractId(string $contractId)
    {
        $this->contractId = $contractId;
    }
    /**
     * @return string The contract external ID. It's used to identify the contract info in EDRs.
     */
    function getContractId() : string
    {
        return $this->contractId;
    }
    /**
     * @param string userId The ID of the user who created the contract in BSS.
     */
    function setUserId(string $userId)
    {
        $this->userId = $userId;
    }
    /**
     * @return string The ID of the user who created the contract in BSS.
     */
    function getUserId() : string
    {
        return $this->userId;
    }
    /**
     * @param MinGroup group
     */
    function setGroup(MinGroup $group)
    {
        $this->group = $group;
    }
    /**
     * @return MinGroup group
     */
    function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * @param MinContractInfo order
     */
    function setOrder(MinContractInfo $order)
    {
        $this->order = $order;
    }
    /**
     * @return MinContractInfo order
     */
    function getOrder() : MinContractInfo
    {
        return $this->order;
    }
    /**
     * @param int pricingModel The pricing model used by this contract info. - 1 -> Pricing model version 1. - 2 -> Pricing model version 2. - 3 -> Pricing model version 3.
     */
    function setPricingModel(int $pricingModel)
    {
        $this->pricingModel = $pricingModel;
    }
    /**
     * @return int The pricing model used by this contract info. - 1 -> Pricing model version 1. - 2 -> Pricing model version 2. - 3 -> Pricing model version 3.
     */
    function getPricingModel() : int
    {
        return $this->pricingModel;
    }
    /**
     * @param string createdBy The user id of contract's creator
     */
    function setCreatedBy(string $createdBy)
    {
        $this->createdBy = $createdBy;
    }
    /**
     * @return string The user id of contract's creator
     */
    function getCreatedBy() : string
    {
        return $this->createdBy;
    }
    /**
     * @param int lastEditionTime Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     */
    function setLastEditionTime(int $lastEditionTime)
    {
        $this->lastEditionTime = $lastEditionTime;
    }
    /**
     * @return int Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     */
    function getLastEditionTime() : int
    {
        return $this->lastEditionTime;
    }
    /**
     * @param int creationTime Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     */
    function setCreationTime(int $creationTime)
    {
        $this->creationTime = $creationTime;
    }
    /**
     * @return int Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     */
    function getCreationTime() : int
    {
        return $this->creationTime;
    }
    /**
     * @param string lastEditedBy The user id of the contract last editor
     */
    function setLastEditedBy(string $lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;
    }
    /**
     * @return string The user id of the contract last editor
     */
    function getLastEditedBy() : string
    {
        return $this->lastEditedBy;
    }
    /**
     * @param int startTime The start time (in milliseconds) of the contract
     */
    function setStartTime(int $startTime)
    {
        $this->startTime = $startTime;
    }
    /**
     * @return int The start time (in milliseconds) of the contract
     */
    function getStartTime() : int
    {
        return $this->startTime;
    }
    /**
     * @param string timezone The contract timezone name as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica").
     */
    function setTimezone(string $timezone)
    {
        $this->timezone = $timezone;
    }
    /**
     * @return string The contract timezone name as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica").
     */
    function getTimezone() : string
    {
        return $this->timezone;
    }
    /**
     * @param int subscriptionPlan The contract info subscription plan. - 0 -> Free order - 1 -> Pay As You Grow (PAYG) - 2 -> Committed Volume Plan (CVP) - 3 -> Flexible Committed Volume Plan (CVP Flex)
     */
    function setSubscriptionPlan(int $subscriptionPlan)
    {
        $this->subscriptionPlan = $subscriptionPlan;
    }
    /**
     * @return int The contract info subscription plan. - 0 -> Free order - 1 -> Pay As You Grow (PAYG) - 2 -> Committed Volume Plan (CVP) - 3 -> Flexible Committed Volume Plan (CVP Flex)
     */
    function getSubscriptionPlan() : int
    {
        return $this->subscriptionPlan;
    }
    /**
     * @param int tokenDuration The token duration in months. Must be >= 0. 0 means unlimited time.
     */
    function setTokenDuration(int $tokenDuration)
    {
        $this->tokenDuration = $tokenDuration;
    }
    /**
     * @return int The token duration in months. Must be >= 0. 0 means unlimited time.
     */
    function getTokenDuration() : int
    {
        return $this->tokenDuration;
    }
    /**
     * @param MinGroup[] blacklistedTerritories The list of "blacklisted" territories, as an array of NIP groups.
     */
    function setBlacklistedTerritories(array $blacklistedTerritories)
    {
        $this->blacklistedTerritories = $blacklistedTerritories;
    }
    /**
     * @return MinGroup[] The list of "blacklisted" territories, as an array of NIP groups.
     */
    function getBlacklistedTerritories() : array
    {
        return $this->blacklistedTerritories;
    }
    /**
     * @param int tokensInUse The number of tokens in use.
     */
    function setTokensInUse(int $tokensInUse)
    {
        $this->tokensInUse = $tokensInUse;
    }
    /**
     * @return int The number of tokens in use.
     */
    function getTokensInUse() : int
    {
        return $this->tokensInUse;
    }
    /**
     * @param int tokensUsed The number of tokens used (expired or revoked).
     */
    function setTokensUsed(int $tokensUsed)
    {
        $this->tokensUsed = $tokensUsed;
    }
    /**
     * @return int The number of tokens used (expired or revoked).
     */
    function getTokensUsed() : int
    {
        return $this->tokensUsed;
    }
}