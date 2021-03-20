<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonContractInfo;
/**
 * Defines a contract's common properties for creation
 */
class ContractInfoCreate extends CommonContractInfo
{
    /**
     * ID of group associated with the contact
     *
     * @var string
     */
    protected string $groupId;
    /**
     * The contract external ID. It's used to identify the contract in EDRs.
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
    /**
     * The order ID (hex), if any.
     *
     * @var string
     */
    protected string $orderId;
    /**
     * The order name, if any
     *
     * @var string
     */
    protected string $orderName;
    /**
     * The pricing model used by this contract info. 1 -> Pricing model version 1. 2 -> Pricing model version 2. 3 -> Pricing model version 3.
     *
     * @var int
     */
    protected int $pricingModel;
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
     * The contract info subscription plan. 0 -> Free order 1 -> Pay As You Grow (PAYG) 2 -> Committed Volume Plan (CVP) 3 -> Flexible Committed Volume Plan (CVP Flex) 4 -> PACK 5 -> DevKit 6 -> Activate
     *
     * @var int
     */
    protected int $subscriptionPlan;
    /**
     * The token duration in months. Must be >= 0, if 0 unlimited token duration.
     *
     * @var int
     */
    protected int $tokenDuration;
    /**
     * The list of "blacklisted" territories, as an array of NIP group IDs.
     *
     * @var string[]
     */
    protected array $blacklistedTerritories;
    /**
     * @param string groupId ID of group associated with the contact
     */
    function setGroupId(string $groupId)
    {
        $this->groupId = $groupId;
    }
    /**
     * @return string ID of group associated with the contact
     */
    function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * @param string contractId The contract external ID. It's used to identify the contract in EDRs.
     */
    function setContractId(string $contractId)
    {
        $this->contractId = $contractId;
    }
    /**
     * @return string The contract external ID. It's used to identify the contract in EDRs.
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
     * @param string orderId The order ID (hex), if any.
     */
    function setOrderId(string $orderId)
    {
        $this->orderId = $orderId;
    }
    /**
     * @return string The order ID (hex), if any.
     */
    function getOrderId() : string
    {
        return $this->orderId;
    }
    /**
     * @param string orderName The order name, if any
     */
    function setOrderName(string $orderName)
    {
        $this->orderName = $orderName;
    }
    /**
     * @return string The order name, if any
     */
    function getOrderName() : string
    {
        return $this->orderName;
    }
    /**
     * @param int pricingModel The pricing model used by this contract info. 1 -> Pricing model version 1. 2 -> Pricing model version 2. 3 -> Pricing model version 3.
     */
    function setPricingModel(int $pricingModel)
    {
        $this->pricingModel = $pricingModel;
    }
    /**
     * @return int The pricing model used by this contract info. 1 -> Pricing model version 1. 2 -> Pricing model version 2. 3 -> Pricing model version 3.
     */
    function getPricingModel() : int
    {
        return $this->pricingModel;
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
     * @param int subscriptionPlan The contract info subscription plan. 0 -> Free order 1 -> Pay As You Grow (PAYG) 2 -> Committed Volume Plan (CVP) 3 -> Flexible Committed Volume Plan (CVP Flex) 4 -> PACK 5 -> DevKit 6 -> Activate
     */
    function setSubscriptionPlan(int $subscriptionPlan)
    {
        $this->subscriptionPlan = $subscriptionPlan;
    }
    /**
     * @return int The contract info subscription plan. 0 -> Free order 1 -> Pay As You Grow (PAYG) 2 -> Committed Volume Plan (CVP) 3 -> Flexible Committed Volume Plan (CVP Flex) 4 -> PACK 5 -> DevKit 6 -> Activate
     */
    function getSubscriptionPlan() : int
    {
        return $this->subscriptionPlan;
    }
    /**
     * @param int tokenDuration The token duration in months. Must be >= 0, if 0 unlimited token duration.
     */
    function setTokenDuration(int $tokenDuration)
    {
        $this->tokenDuration = $tokenDuration;
    }
    /**
     * @return int The token duration in months. Must be >= 0, if 0 unlimited token duration.
     */
    function getTokenDuration() : int
    {
        return $this->tokenDuration;
    }
    /**
     * @param string[] blacklistedTerritories The list of "blacklisted" territories, as an array of NIP group IDs.
     */
    function setBlacklistedTerritories(array $blacklistedTerritories)
    {
        $this->blacklistedTerritories = $blacklistedTerritories;
    }
    /**
     * @return string[] The list of "blacklisted" territories, as an array of NIP group IDs.
     */
    function getBlacklistedTerritories() : array
    {
        return $this->blacklistedTerritories;
    }
}