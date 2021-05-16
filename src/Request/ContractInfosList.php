<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of contracts according to visibility permissions and request filters.
 */
class ContractInfosList extends Request
{
    /**
     * BASIC
     */
    public const GROUP_TYPE_BASIC = 2;
    /**
     * CHANNEL
     */
    public const GROUP_TYPE_CHANNEL = 9;
    /**
     * Pricing model v1
     */
    public const PRICING_MODEL_PRICING_MODEL_V1 = 1;
    /**
     * Pricing model v2
     */
    public const PRICING_MODEL_PRICING_MODEL_V2 = 2;
    /**
     * Pricing model v3
     */
    public const PRICING_MODEL_PRICING_MODEL_V3 = 3;
    /**
     * Free order
     */
    public const SUBSCRIPTION_PLAN_FREE_ORDER = 0;
    /**
     * Pay As You Grow (PAYG)
     */
    public const SUBSCRIPTION_PLAN_PAY_AS_YOU_GROW = 1;
    /**
     * Committed Volume Plan (CVP)
     */
    public const SUBSCRIPTION_PLAN_COMMITTED_VOLUME_PLAN = 2;
    /**
     * Flexible Committed Volume Plan (CVP Flex)
     */
    public const SUBSCRIPTION_PLAN_FLEXIBLE_COMMITTED_VOLUME_PLAN = 3;
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
    public const SUBSCRIPTION_PLAN_ACTIVATE = 6;
    /**
     * Searches for contracts containing the given text in their name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Searches for contracts who are attached to the given group
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * Searches for contracts that are attached to a specific group type.
     * 
     * - {@see ContractInfosList::GROUP_TYPE_BASIC}
     * - {@see ContractInfosList::GROUP_TYPE_CHANNEL}
     *
     * @var int
     */
    protected ?int $groupType = null;
    /**
     * Searches for contracts that are attached to the given group and its descendants
     *
     * @var bool
     */
    protected ?bool $deep = null;
    /**
     * Searches for contracts that are attached to the given group and its ancestors
     *
     * @var bool
     */
    protected ?bool $up = null;
    /**
     * Searches for contracts with the listed orderIds. The elements of the list are separated by comma.
     *
     * @var string
     */
    protected ?string $orderIds = null;
    /**
     * Searches for contracts IDs that have the listed external (BSS) contractId. The elements of the list are
     * separated by comma.
     *
     * @var string
     */
    protected ?string $contractIds = null;
    /**
     * Searches for contracts with communication end time superior or equal to given time (in milliseconds since Unix
     * Epoch).
     *
     * @var int
     */
    protected ?int $fromTime = null;
    /**
     * Searches for contracts with start time inferior to given time (in milliseconds since Unix Epoch).
     *
     * @var int
     */
    protected ?int $toTime = null;
    /**
     * Searches for contracts with the given token duration in months.
     *
     * @var int
     */
    protected ?int $tokenDuration = null;
    /**
     * Searches for contracts with a given pricing model
     * 
     * - {@see ContractInfosList::PRICING_MODEL_PRICING_MODEL_V1}
     * - {@see ContractInfosList::PRICING_MODEL_PRICING_MODEL_V2}
     * - {@see ContractInfosList::PRICING_MODEL_PRICING_MODEL_V3}
     *
     * @var int
     */
    protected ?int $pricingModel = null;
    /**
     * Searches for contracts with the given subscription plan:
     * 
     * - {@see ContractInfosList::SUBSCRIPTION_PLAN_FREE_ORDER}
     * - {@see ContractInfosList::SUBSCRIPTION_PLAN_PAY_AS_YOU_GROW}
     * - {@see ContractInfosList::SUBSCRIPTION_PLAN_COMMITTED_VOLUME_PLAN}
     * - {@see ContractInfosList::SUBSCRIPTION_PLAN_FLEXIBLE_COMMITTED_VOLUME_PLAN}
     * - {@see ContractInfosList::SUBSCRIPTION_PLAN_PACK}
     * - {@see ContractInfosList::SUBSCRIPTION_PLAN_DEVKIT}
     * - {@see ContractInfosList::SUBSCRIPTION_PLAN_ACTIVATE}
     *
     * @var int
     */
    protected ?int $subscriptionPlan = null;
    /**
     * Searches for contracts with the given geolocation mode (level)
     * 1 (ATLAS)
     * 2 (ATLAS_WIFI)
     * 3 (N/A)
     * 4 (ATLAS_POV)
     * 5 (ATLAS_BUBBLE)
     * 6 (ATLAS_WIFI_PRIVATEDB)
     *
     * @var int
     */
    protected ?int $geolocationMode = null;
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * The maximum number of items to return
     *
     * @var int
     */
    protected ?int $limit = null;
    /**
     * The number of items to skip
     *
     * @var int
     */
    protected ?int $offset = null;
    /**
     * Token representing the page to retrieve
     *
     * @var string
     */
    protected ?string $pageId = null;
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    /**
     * @internal
     */
    protected array $query = array('name', 'groupId', 'groupType', 'deep', 'up', 'orderIds', 'contractIds', 'fromTime', 'toTime', 'tokenDuration', 'pricingModel', 'subscriptionPlan', 'geolocationMode', 'fields', 'limit', 'offset', 'pageId', 'authorizations');
    /**
     * @internal
     */
    protected array $validations = array('fields' => array('in:group(name\\,type\\,level),order(name),blacklistedTerritories(group(name\\,type\\,level))', 'nullable'));
    /**
     * Setter for name
     *
     * @param string $name Searches for contracts containing the given text in their name
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string Searches for contracts containing the given text in their name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for groupId
     *
     * @param string $groupId Searches for contracts who are attached to the given group
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
     * @return string Searches for contracts who are attached to the given group
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * Setter for groupType
     *
     * @param int $groupType Searches for contracts that are attached to a specific group type.
     *                       
     *                       - {@see ContractInfosList::GROUP_TYPE_BASIC}
     *                       - {@see ContractInfosList::GROUP_TYPE_CHANNEL}
     *                       
     *
     * @return self To use in method chains
     */
    public function setGroupType(?int $groupType) : self
    {
        $this->groupType = $groupType;
        return $this;
    }
    /**
     * Getter for groupType
     *
     * @return int Searches for contracts that are attached to a specific group type.
     *             
     *             - {@see ContractInfosList::GROUP_TYPE_BASIC}
     *             - {@see ContractInfosList::GROUP_TYPE_CHANNEL}
     *             
     */
    public function getGroupType() : ?int
    {
        return $this->groupType;
    }
    /**
     * Setter for deep
     *
     * @param bool $deep Searches for contracts that are attached to the given group and its descendants
     *
     * @return self To use in method chains
     */
    public function setDeep(?bool $deep) : self
    {
        $this->deep = $deep;
        return $this;
    }
    /**
     * Getter for deep
     *
     * @return bool Searches for contracts that are attached to the given group and its descendants
     */
    public function getDeep() : ?bool
    {
        return $this->deep;
    }
    /**
     * Setter for up
     *
     * @param bool $up Searches for contracts that are attached to the given group and its ancestors
     *
     * @return self To use in method chains
     */
    public function setUp(?bool $up) : self
    {
        $this->up = $up;
        return $this;
    }
    /**
     * Getter for up
     *
     * @return bool Searches for contracts that are attached to the given group and its ancestors
     */
    public function getUp() : ?bool
    {
        return $this->up;
    }
    /**
     * Setter for orderIds
     *
     * @param string $orderIds Searches for contracts with the listed orderIds. The elements of the list are
     *                         separated by comma.
     *
     * @return self To use in method chains
     */
    public function setOrderIds(?string $orderIds) : self
    {
        $this->orderIds = $orderIds;
        return $this;
    }
    /**
     * Getter for orderIds
     *
     * @return string Searches for contracts with the listed orderIds. The elements of the list are separated by
     *                comma.
     */
    public function getOrderIds() : ?string
    {
        return $this->orderIds;
    }
    /**
     * Setter for contractIds
     *
     * @param string $contractIds Searches for contracts IDs that have the listed external (BSS) contractId. The
     *                            elements of the list are separated by comma.
     *
     * @return self To use in method chains
     */
    public function setContractIds(?string $contractIds) : self
    {
        $this->contractIds = $contractIds;
        return $this;
    }
    /**
     * Getter for contractIds
     *
     * @return string Searches for contracts IDs that have the listed external (BSS) contractId. The elements of the
     *                list are separated by comma.
     */
    public function getContractIds() : ?string
    {
        return $this->contractIds;
    }
    /**
     * Setter for fromTime
     *
     * @param int $fromTime Searches for contracts with communication end time superior or equal to given time (in
     *                      milliseconds since Unix Epoch).
     *
     * @return self To use in method chains
     */
    public function setFromTime(?int $fromTime) : self
    {
        $this->fromTime = $fromTime;
        return $this;
    }
    /**
     * Getter for fromTime
     *
     * @return int Searches for contracts with communication end time superior or equal to given time (in
     *             milliseconds since Unix Epoch).
     */
    public function getFromTime() : ?int
    {
        return $this->fromTime;
    }
    /**
     * Setter for toTime
     *
     * @param int $toTime Searches for contracts with start time inferior to given time (in milliseconds since Unix
     *                    Epoch).
     *
     * @return self To use in method chains
     */
    public function setToTime(?int $toTime) : self
    {
        $this->toTime = $toTime;
        return $this;
    }
    /**
     * Getter for toTime
     *
     * @return int Searches for contracts with start time inferior to given time (in milliseconds since Unix Epoch).
     */
    public function getToTime() : ?int
    {
        return $this->toTime;
    }
    /**
     * Setter for tokenDuration
     *
     * @param int $tokenDuration Searches for contracts with the given token duration in months.
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
     * @return int Searches for contracts with the given token duration in months.
     */
    public function getTokenDuration() : ?int
    {
        return $this->tokenDuration;
    }
    /**
     * Setter for pricingModel
     *
     * @param int $pricingModel Searches for contracts with a given pricing model
     *                          
     *                          - {@see ContractInfosList::PRICING_MODEL_PRICING_MODEL_V1}
     *                          - {@see ContractInfosList::PRICING_MODEL_PRICING_MODEL_V2}
     *                          - {@see ContractInfosList::PRICING_MODEL_PRICING_MODEL_V3}
     *                          
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
     * @return int Searches for contracts with a given pricing model
     *             
     *             - {@see ContractInfosList::PRICING_MODEL_PRICING_MODEL_V1}
     *             - {@see ContractInfosList::PRICING_MODEL_PRICING_MODEL_V2}
     *             - {@see ContractInfosList::PRICING_MODEL_PRICING_MODEL_V3}
     *             
     */
    public function getPricingModel() : ?int
    {
        return $this->pricingModel;
    }
    /**
     * Setter for subscriptionPlan
     *
     * @param int $subscriptionPlan Searches for contracts with the given subscription plan:
     *                              
     *                              - {@see ContractInfosList::SUBSCRIPTION_PLAN_FREE_ORDER}
     *                              - {@see ContractInfosList::SUBSCRIPTION_PLAN_PAY_AS_YOU_GROW}
     *                              - {@see ContractInfosList::SUBSCRIPTION_PLAN_COMMITTED_VOLUME_PLAN}
     *                              - {@see ContractInfosList::SUBSCRIPTION_PLAN_FLEXIBLE_COMMITTED_VOLUME_PLAN}
     *                              - {@see ContractInfosList::SUBSCRIPTION_PLAN_PACK}
     *                              - {@see ContractInfosList::SUBSCRIPTION_PLAN_DEVKIT}
     *                              - {@see ContractInfosList::SUBSCRIPTION_PLAN_ACTIVATE}
     *                              
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
     * @return int Searches for contracts with the given subscription plan:
     *             
     *             - {@see ContractInfosList::SUBSCRIPTION_PLAN_FREE_ORDER}
     *             - {@see ContractInfosList::SUBSCRIPTION_PLAN_PAY_AS_YOU_GROW}
     *             - {@see ContractInfosList::SUBSCRIPTION_PLAN_COMMITTED_VOLUME_PLAN}
     *             - {@see ContractInfosList::SUBSCRIPTION_PLAN_FLEXIBLE_COMMITTED_VOLUME_PLAN}
     *             - {@see ContractInfosList::SUBSCRIPTION_PLAN_PACK}
     *             - {@see ContractInfosList::SUBSCRIPTION_PLAN_DEVKIT}
     *             - {@see ContractInfosList::SUBSCRIPTION_PLAN_ACTIVATE}
     *             
     */
    public function getSubscriptionPlan() : ?int
    {
        return $this->subscriptionPlan;
    }
    /**
     * Setter for geolocationMode
     *
     * @param int $geolocationMode Searches for contracts with the given geolocation mode (level)
     *                             1 (ATLAS)
     *                             2 (ATLAS_WIFI)
     *                             3 (N/A)
     *                             4 (ATLAS_POV)
     *                             5 (ATLAS_BUBBLE)
     *                             6 (ATLAS_WIFI_PRIVATEDB)
     *                             
     *
     * @return self To use in method chains
     */
    public function setGeolocationMode(?int $geolocationMode) : self
    {
        $this->geolocationMode = $geolocationMode;
        return $this;
    }
    /**
     * Getter for geolocationMode
     *
     * @return int Searches for contracts with the given geolocation mode (level)
     *             1 (ATLAS)
     *             2 (ATLAS_WIFI)
     *             3 (N/A)
     *             4 (ATLAS_POV)
     *             5 (ATLAS_BUBBLE)
     *             6 (ATLAS_WIFI_PRIVATEDB)
     *             
     */
    public function getGeolocationMode() : ?int
    {
        return $this->geolocationMode;
    }
    /**
     * Setter for fields
     *
     * @param string $fields Defines the other available fields to be returned in the response.
     *                       
     *
     * @return self To use in method chains
     */
    public function setFields(?string $fields) : self
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     * Getter for fields
     *
     * @return string Defines the other available fields to be returned in the response.
     *                
     */
    public function getFields() : ?string
    {
        return $this->fields;
    }
    /**
     * Setter for limit
     *
     * @param int $limit The maximum number of items to return
     *
     * @return self To use in method chains
     */
    public function setLimit(?int $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * Getter for limit
     *
     * @return int The maximum number of items to return
     */
    public function getLimit() : ?int
    {
        return $this->limit;
    }
    /**
     * Setter for offset
     *
     * @param int $offset The number of items to skip
     *
     * @return self To use in method chains
     */
    public function setOffset(?int $offset) : self
    {
        $this->offset = $offset;
        return $this;
    }
    /**
     * Getter for offset
     *
     * @return int The number of items to skip
     */
    public function getOffset() : ?int
    {
        return $this->offset;
    }
    /**
     * Setter for pageId
     *
     * @param string $pageId Token representing the page to retrieve
     *
     * @return self To use in method chains
     */
    public function setPageId(?string $pageId) : self
    {
        $this->pageId = $pageId;
        return $this;
    }
    /**
     * Getter for pageId
     *
     * @return string Token representing the page to retrieve
     */
    public function getPageId() : ?string
    {
        return $this->pageId;
    }
    /**
     * Setter for authorizations
     *
     * @param bool $authorizations if true, we return the list of actions and resources the user has access
     *
     * @return self To use in method chains
     */
    public function setAuthorizations(?bool $authorizations) : self
    {
        $this->authorizations = $authorizations;
        return $this;
    }
    /**
     * Getter for authorizations
     *
     * @return bool if true, we return the list of actions and resources the user has access
     */
    public function getAuthorizations() : ?bool
    {
        return $this->authorizations;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('name' => new PrimitiveSerializer(self::class, 'name', 'string'), 'groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'), 'groupType' => new PrimitiveSerializer(self::class, 'groupType', 'int'), 'deep' => new PrimitiveSerializer(self::class, 'deep', 'bool'), 'up' => new PrimitiveSerializer(self::class, 'up', 'bool'), 'orderIds' => new PrimitiveSerializer(self::class, 'orderIds', 'string'), 'contractIds' => new PrimitiveSerializer(self::class, 'contractIds', 'string'), 'fromTime' => new PrimitiveSerializer(self::class, 'fromTime', 'int'), 'toTime' => new PrimitiveSerializer(self::class, 'toTime', 'int'), 'tokenDuration' => new PrimitiveSerializer(self::class, 'tokenDuration', 'int'), 'pricingModel' => new PrimitiveSerializer(self::class, 'pricingModel', 'int'), 'subscriptionPlan' => new PrimitiveSerializer(self::class, 'subscriptionPlan', 'int'), 'geolocationMode' => new PrimitiveSerializer(self::class, 'geolocationMode', 'int'), 'fields' => new PrimitiveSerializer(self::class, 'fields', 'string'), 'limit' => new PrimitiveSerializer(self::class, 'limit', 'int'), 'offset' => new PrimitiveSerializer(self::class, 'offset', 'int'), 'pageId' => new PrimitiveSerializer(self::class, 'pageId', 'string'), 'authorizations' => new PrimitiveSerializer(self::class, 'authorizations', 'bool'));
    }
}