<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of contracts according to visibility permissions and request filters.
 * 
 */
class ContractInfosList extends Definition
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
     * @var self::GROUP_TYPE_*
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
     * @var self::PRICING_MODEL_*
     */
    protected ?int $pricingModel = null;
    /**
     * Searches for contracts with the given subscription plan:
     *
     * @var self::SUBSCRIPTION_PLAN_*
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
     *
     * @var int
     */
    protected ?int $geolocationMode = null;
    /**
     * Defines the other available fields to be returned in the response.
     * 
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'name', 'string'), new PrimitiveSerializer(self::class, 'groupId', 'string'), new PrimitiveSerializer(self::class, 'groupType', 'int'), new PrimitiveSerializer(self::class, 'deep', 'bool'), new PrimitiveSerializer(self::class, 'up', 'bool'), new PrimitiveSerializer(self::class, 'orderIds', 'string'), new PrimitiveSerializer(self::class, 'contractIds', 'string'), new PrimitiveSerializer(self::class, 'fromTime', 'int'), new PrimitiveSerializer(self::class, 'toTime', 'int'), new PrimitiveSerializer(self::class, 'tokenDuration', 'int'), new PrimitiveSerializer(self::class, 'pricingModel', 'int'), new PrimitiveSerializer(self::class, 'subscriptionPlan', 'int'), new PrimitiveSerializer(self::class, 'geolocationMode', 'int'), new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'offset', 'int'), new PrimitiveSerializer(self::class, 'pageId', 'string'), new PrimitiveSerializer(self::class, 'authorizations', 'bool'));
    protected $query = array('name', 'groupId', 'groupType', 'deep', 'up', 'orderIds', 'contractIds', 'fromTime', 'toTime', 'tokenDuration', 'pricingModel', 'subscriptionPlan', 'geolocationMode', 'fields', 'limit', 'offset', 'pageId', 'authorizations');
    protected $validations = array('name' => array('required'), 'groupId' => array('required'), 'groupType' => array('required'), 'deep' => array('required'), 'up' => array('required'), 'orderIds' => array('required'), 'contractIds' => array('required'), 'fromTime' => array('required'), 'toTime' => array('required'), 'tokenDuration' => array('required'), 'pricingModel' => array('required'), 'subscriptionPlan' => array('required'), 'geolocationMode' => array('required'), 'fields' => array('required', 'in:group(name\\,type\\,level),order(name),blacklistedTerritories(group(name\\,type\\,level))'), 'limit' => array('required'), 'offset' => array('required'), 'pageId' => array('required'), 'authorizations' => array('required'));
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
     * Setter for groupType
     *
     * @param self::GROUP_TYPE_* $groupType Searches for contracts that are attached to a specific group type.
     *
     * @return self To use in method chains
     */
    public function setGroupType(?int $groupType) : self
    {
        $this->groupType = $groupType;
        return $this;
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
     * Setter for pricingModel
     *
     * @param self::PRICING_MODEL_* $pricingModel Searches for contracts with a given pricing model
     *
     * @return self To use in method chains
     */
    public function setPricingModel(?int $pricingModel) : self
    {
        $this->pricingModel = $pricingModel;
        return $this;
    }
    /**
     * Setter for subscriptionPlan
     *
     * @param self::SUBSCRIPTION_PLAN_* $subscriptionPlan Searches for contracts with the given subscription plan:
     *
     * @return self To use in method chains
     */
    public function setSubscriptionPlan(?int $subscriptionPlan) : self
    {
        $this->subscriptionPlan = $subscriptionPlan;
        return $this;
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
}