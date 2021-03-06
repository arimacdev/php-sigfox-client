<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\OneOf;
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
     * Setter for name
     *
     * @param string $name Searches for contracts containing the given text in their name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setGroupId(?string $groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setGroupType(?int $groupType)
    {
        $this->groupType = $groupType;
        return $this;
    }
    /**
     * Getter for groupType
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setDeep(?bool $deep)
    {
        $this->deep = $deep;
        return $this;
    }
    /**
     * Getter for deep
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setUp(?bool $up)
    {
        $this->up = $up;
        return $this;
    }
    /**
     * Getter for up
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setOrderIds(?string $orderIds)
    {
        $this->orderIds = $orderIds;
        return $this;
    }
    /**
     * Getter for orderIds
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setContractIds(?string $contractIds)
    {
        $this->contractIds = $contractIds;
        return $this;
    }
    /**
     * Getter for contractIds
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setFromTime(?int $fromTime)
    {
        $this->fromTime = $fromTime;
        return $this;
    }
    /**
     * Getter for fromTime
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setToTime(?int $toTime)
    {
        $this->toTime = $toTime;
        return $this;
    }
    /**
     * Getter for toTime
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setTokenDuration(?int $tokenDuration)
    {
        $this->tokenDuration = $tokenDuration;
        return $this;
    }
    /**
     * Getter for tokenDuration
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setPricingModel(?int $pricingModel)
    {
        $this->pricingModel = $pricingModel;
        return $this;
    }
    /**
     * Getter for pricingModel
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setSubscriptionPlan(?int $subscriptionPlan)
    {
        $this->subscriptionPlan = $subscriptionPlan;
        return $this;
    }
    /**
     * Getter for subscriptionPlan
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setGeolocationMode(?int $geolocationMode)
    {
        $this->geolocationMode = $geolocationMode;
        return $this;
    }
    /**
     * Getter for geolocationMode
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setFields(?string $fields)
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     * Getter for fields
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setLimit(?int $limit)
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * Getter for limit
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setOffset(?int $offset)
    {
        $this->offset = $offset;
        return $this;
    }
    /**
     * Getter for offset
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setPageId(?string $pageId)
    {
        $this->pageId = $pageId;
        return $this;
    }
    /**
     * Getter for pageId
     *
     * @internal
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
     * @return static To use in method chains
     */
    public function setAuthorizations(?bool $authorizations)
    {
        $this->authorizations = $authorizations;
        return $this;
    }
    /**
     * Getter for authorizations
     *
     * @internal
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
        $serializers = array('name' => new PrimitiveSerializer('string'), 'groupId' => new PrimitiveSerializer('string'), 'groupType' => new PrimitiveSerializer('int'), 'deep' => new PrimitiveSerializer('bool'), 'up' => new PrimitiveSerializer('bool'), 'orderIds' => new PrimitiveSerializer('string'), 'contractIds' => new PrimitiveSerializer('string'), 'fromTime' => new PrimitiveSerializer('int'), 'toTime' => new PrimitiveSerializer('int'), 'tokenDuration' => new PrimitiveSerializer('int'), 'pricingModel' => new PrimitiveSerializer('int'), 'subscriptionPlan' => new PrimitiveSerializer('int'), 'geolocationMode' => new PrimitiveSerializer('int'), 'fields' => new PrimitiveSerializer('string'), 'limit' => new PrimitiveSerializer('int'), 'offset' => new PrimitiveSerializer('int'), 'pageId' => new PrimitiveSerializer('string'), 'authorizations' => new PrimitiveSerializer('bool'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('fields' => array(new OneOf(array('group(name,type,level)', 'order(name)', 'blacklistedTerritories(group(name,type,level))'))));
        return $rules;
    }
}