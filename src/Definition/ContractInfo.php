<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Defines all the contract properties.
 */
class ContractInfo extends CommonContractInfo
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
     * The contract ID.
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The contract external ID. It's used to identify the contract info in EDRs.
     * 
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
     * @var MinGroup
     */
    protected ?MinGroup $group = null;
    /**
     * @var MinContractInfo
     */
    protected ?MinContractInfo $order = null;
    /**
     * The pricing model used by this contract info.
     *
     * @var self::PRICING_MODEL_*
     */
    protected ?int $pricingModel = null;
    /**
     * The user id of contract's creator
     *
     * @var string
     */
    protected ?string $createdBy = null;
    /**
     * Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected ?int $lastEditionTime = null;
    /**
     * Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * The user id of the contract last editor
     *
     * @var string
     */
    protected ?string $lastEditedBy = null;
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
     * The token duration in months. Must be >= 0. 0 means unlimited time.
     *
     * @var int
     */
    protected ?int $tokenDuration = null;
    /**
     * The list of "blacklisted" territories, as an array of NIP groups.
     *
     * @var MinGroup[]
     */
    protected ?array $blacklistedTerritories = null;
    /**
     * The number of tokens in use.
     *
     * @var int
     */
    protected ?int $tokensInUse = null;
    /**
     * The number of tokens used (expired or revoked).
     *
     * @var int
     */
    protected ?int $tokensUsed = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'), new PrimitiveSerializer(self::class, 'contractId', 'string'), new PrimitiveSerializer(self::class, 'userId', 'string'), new ClassSerializer(self::class, 'group', MinGroup::class), new ClassSerializer(self::class, 'order', MinContractInfo::class), new PrimitiveSerializer(self::class, 'pricingModel', 'int'), new PrimitiveSerializer(self::class, 'createdBy', 'string'), new PrimitiveSerializer(self::class, 'lastEditionTime', 'int'), new PrimitiveSerializer(self::class, 'creationTime', 'int'), new PrimitiveSerializer(self::class, 'lastEditedBy', 'string'), new PrimitiveSerializer(self::class, 'startTime', 'int'), new PrimitiveSerializer(self::class, 'timezone', 'string'), new PrimitiveSerializer(self::class, 'subscriptionPlan', 'int'), new PrimitiveSerializer(self::class, 'tokenDuration', 'int'), new ArraySerializer(self::class, 'blacklistedTerritories', new ClassSerializer(self::class, 'blacklistedTerritories', MinGroup::class)), new PrimitiveSerializer(self::class, 'tokensInUse', 'int'), new PrimitiveSerializer(self::class, 'tokensUsed', 'int'));
    /**
     * Setter for id
     *
     * @param string $id The contract ID.
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The contract ID.
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for contractId
     *
     * @param string $contractId The contract external ID. It's used to identify the contract info in EDRs.
     *                           
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
     * @return string The contract external ID. It's used to identify the contract info in EDRs.
     *                
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
     * Setter for group
     *
     * @param MinGroup $group
     *
     * @return self To use in method chains
     */
    public function setGroup(?MinGroup $group) : self
    {
        $this->group = $group;
        return $this;
    }
    /**
     * Getter for group
     *
     * @return MinGroup
     */
    public function getGroup() : MinGroup
    {
        return $this->group;
    }
    /**
     * Setter for order
     *
     * @param MinContractInfo $order
     *
     * @return self To use in method chains
     */
    public function setOrder(?MinContractInfo $order) : self
    {
        $this->order = $order;
        return $this;
    }
    /**
     * Getter for order
     *
     * @return MinContractInfo
     */
    public function getOrder() : MinContractInfo
    {
        return $this->order;
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
     * Setter for createdBy
     *
     * @param string $createdBy The user id of contract's creator
     *
     * @return self To use in method chains
     */
    public function setCreatedBy(?string $createdBy) : self
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Getter for createdBy
     *
     * @return string The user id of contract's creator
     */
    public function getCreatedBy() : string
    {
        return $this->createdBy;
    }
    /**
     * Setter for lastEditionTime
     *
     * @param int $lastEditionTime Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setLastEditionTime(?int $lastEditionTime) : self
    {
        $this->lastEditionTime = $lastEditionTime;
        return $this;
    }
    /**
     * Getter for lastEditionTime
     *
     * @return int Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     */
    public function getLastEditionTime() : int
    {
        return $this->lastEditionTime;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setCreationTime(?int $creationTime) : self
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Getter for creationTime
     *
     * @return int Creation date of this contract (timestamp in milliseconds since Unix Epoch)
     */
    public function getCreationTime() : int
    {
        return $this->creationTime;
    }
    /**
     * Setter for lastEditedBy
     *
     * @param string $lastEditedBy The user id of the contract last editor
     *
     * @return self To use in method chains
     */
    public function setLastEditedBy(?string $lastEditedBy) : self
    {
        $this->lastEditedBy = $lastEditedBy;
        return $this;
    }
    /**
     * Getter for lastEditedBy
     *
     * @return string The user id of the contract last editor
     */
    public function getLastEditedBy() : string
    {
        return $this->lastEditedBy;
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
     * @param int $tokenDuration The token duration in months. Must be >= 0. 0 means unlimited time.
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
     * @return int The token duration in months. Must be >= 0. 0 means unlimited time.
     */
    public function getTokenDuration() : int
    {
        return $this->tokenDuration;
    }
    /**
     * Setter for blacklistedTerritories
     *
     * @param MinGroup[] $blacklistedTerritories The list of "blacklisted" territories, as an array of NIP groups.
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
     * @return MinGroup[] The list of "blacklisted" territories, as an array of NIP groups.
     */
    public function getBlacklistedTerritories() : array
    {
        return $this->blacklistedTerritories;
    }
    /**
     * Setter for tokensInUse
     *
     * @param int $tokensInUse The number of tokens in use.
     *
     * @return self To use in method chains
     */
    public function setTokensInUse(?int $tokensInUse) : self
    {
        $this->tokensInUse = $tokensInUse;
        return $this;
    }
    /**
     * Getter for tokensInUse
     *
     * @return int The number of tokens in use.
     */
    public function getTokensInUse() : int
    {
        return $this->tokensInUse;
    }
    /**
     * Setter for tokensUsed
     *
     * @param int $tokensUsed The number of tokens used (expired or revoked).
     *
     * @return self To use in method chains
     */
    public function setTokensUsed(?int $tokensUsed) : self
    {
        $this->tokensUsed = $tokensUsed;
        return $this;
    }
    /**
     * Getter for tokensUsed
     *
     * @return int The number of tokens used (expired or revoked).
     */
    public function getTokensUsed() : int
    {
        return $this->tokensUsed;
    }
}