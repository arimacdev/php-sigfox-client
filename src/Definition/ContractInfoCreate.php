<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Defines a contract's common properties for creation
 */
class ContractInfoCreate extends CommonContractInfo
{
    /**
     * Pricing model verion 1
     */
    public const PRICING_MODEL_PRICING_MODEL_V1 = 1;
    /**
     * Pricing model verion 2
     */
    public const PRICING_MODEL_PRICING_MODEL_V2 = 2;
    /**
     * Pricing model verion 3
     */
    public const PRICING_MODEL_PRICING_MODEL_V3 = 3;
    /**
     * Free order
     */
    public const SUBSCRIPTION_PLAN_FREE_ORDER = 0;
    /**
     * Pay As You Grow (PAYG)
     */
    public const SUBSCRIPTION_PLAN_PAYG = 1;
    /**
     * Committed Volume Plan (CVP)
     */
    public const SUBSCRIPTION_PLAN_CVP = 2;
    /**
     * Flexible Committed Volume Plan (CVP Flex)
     */
    public const SUBSCRIPTION_PLAN_CVP_FLEX = 3;
    /**
     * PACK
     */
    public const SUBSCRIPTION_PLAN_PACK = 4;
    /**
     * DevKit
     */
    public const SUBSCRIPTION_PLAN_DEVKIT = 5;
    /**
     * Activate
     */
    public const SUBSCRIPTION_PLAN_ACTIVATE = 5;
    /**
     * ID of group associated with the contact
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * The contract external ID. It's used to identify the contract in EDRs.
     *
     * @var string
     */
    protected ?string $contractId = null;
    /**
     * The ID of the user who created the contract in BSS.
     *
     * @var string
     */
    protected ?string $userId = null;
    /**
     * The order ID (hex), if any.
     *
     * @var string
     */
    protected ?string $orderId = null;
    /**
     * The order name, if any
     *
     * @var string
     */
    protected ?string $orderName = null;
    /**
     * The pricing model used by this contract info.
     *
     * @var self::PRICING_MODEL_*
     */
    protected ?int $pricingModel = null;
    /**
     * The start time (in milliseconds) of the contract
     *
     * @var int
     */
    protected ?int $startTime = null;
    /**
     * The contract timezone name as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica").
     *
     * @var string
     */
    protected ?string $timezone = null;
    /**
     * The contract info subscription plan.
     *
     * @var self::SUBSCRIPTION_PLAN_*
     */
    protected ?int $subscriptionPlan = null;
    /**
     * The token duration in months. Must be >= 0, if 0 unlimited token duration.
     *
     * @var int
     */
    protected ?int $tokenDuration = null;
    /**
     * The list of "blacklisted" territories, as an array of NIP group IDs.
     *
     * @var string[]
     */
    protected ?array $blacklistedTerritories = null;
    /**
     * Setter for groupId
     *
     * @param string $groupId ID of group associated with the contact
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @return string ID of group associated with the contact
     */
    public function getGroupId() : string
    {
        return $this->groupId;
    }
    /**
     * Setter for contractId
     *
     * @param string $contractId The contract external ID. It's used to identify the contract in EDRs.
     *
     * @return self To use in method chains
     */
    public function setContractId(?string $contractId) : self
    {
        $this->contractId = $contractId;
        return $this;
    }
    /**
     * Getter for contractId
     *
     * @return string The contract external ID. It's used to identify the contract in EDRs.
     */
    public function getContractId() : string
    {
        return $this->contractId;
    }
    /**
     * Setter for userId
     *
     * @param string $userId The ID of the user who created the contract in BSS.
     *
     * @return self To use in method chains
     */
    public function setUserId(?string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * Getter for userId
     *
     * @return string The ID of the user who created the contract in BSS.
     */
    public function getUserId() : string
    {
        return $this->userId;
    }
    /**
     * Setter for orderId
     *
     * @param string $orderId The order ID (hex), if any.
     *
     * @return self To use in method chains
     */
    public function setOrderId(?string $orderId) : self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Getter for orderId
     *
     * @return string The order ID (hex), if any.
     */
    public function getOrderId() : string
    {
        return $this->orderId;
    }
    /**
     * Setter for orderName
     *
     * @param string $orderName The order name, if any
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
     * @return string The order name, if any
     */
    public function getOrderName() : string
    {
        return $this->orderName;
    }
    /**
     * Setter for pricingModel
     *
     * @param self::PRICING_MODEL_* $pricingModel The pricing model used by this contract info.
     *
     * @return self To use in method chains
     */
    public function setPricingModel(?int $pricingModel) : self
    {
        $this->pricingModel = $pricingModel;
        return $this;
    }
    /**
     * Getter for pricingModel
     *
     * @return self::PRICING_MODEL_* The pricing model used by this contract info.
     */
    public function getPricingModel() : int
    {
        return $this->pricingModel;
    }
    /**
     * Setter for startTime
     *
     * @param int $startTime The start time (in milliseconds) of the contract
     *
     * @return self To use in method chains
     */
    public function setStartTime(?int $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Getter for startTime
     *
     * @return int The start time (in milliseconds) of the contract
     */
    public function getStartTime() : int
    {
        return $this->startTime;
    }
    /**
     * Setter for timezone
     *
     * @param string $timezone The contract timezone name as a Java TimeZone ID ("full name" version only, like
     *                         "America/Costa_Rica").
     *
     * @return self To use in method chains
     */
    public function setTimezone(?string $timezone) : self
    {
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Getter for timezone
     *
     * @return string The contract timezone name as a Java TimeZone ID ("full name" version only, like
     *                "America/Costa_Rica").
     */
    public function getTimezone() : string
    {
        return $this->timezone;
    }
    /**
     * Setter for subscriptionPlan
     *
     * @param self::SUBSCRIPTION_PLAN_* $subscriptionPlan The contract info subscription plan.
     *
     * @return self To use in method chains
     */
    public function setSubscriptionPlan(?int $subscriptionPlan) : self
    {
        $this->subscriptionPlan = $subscriptionPlan;
        return $this;
    }
    /**
     * Getter for subscriptionPlan
     *
     * @return self::SUBSCRIPTION_PLAN_* The contract info subscription plan.
     */
    public function getSubscriptionPlan() : int
    {
        return $this->subscriptionPlan;
    }
    /**
     * Setter for tokenDuration
     *
     * @param int $tokenDuration The token duration in months. Must be >= 0, if 0 unlimited token duration.
     *
     * @return self To use in method chains
     */
    public function setTokenDuration(?int $tokenDuration) : self
    {
        $this->tokenDuration = $tokenDuration;
        return $this;
    }
    /**
     * Getter for tokenDuration
     *
     * @return int The token duration in months. Must be >= 0, if 0 unlimited token duration.
     */
    public function getTokenDuration() : int
    {
        return $this->tokenDuration;
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
    public function getBlacklistedTerritories() : array
    {
        return $this->blacklistedTerritories;
    }
}