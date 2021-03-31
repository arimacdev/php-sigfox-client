<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class ContractInfosGet extends Definition
{
    /** BASIC */
    public const GROUP_TYPE_BASIC = 2;
    /** CHANNEL */
    public const GROUP_TYPE_CHANNEL = 9;
    /** Pricing model v1 */
    public const PRICING_MODEL_PRICING_MODEL_V1 = 1;
    /** Pricing model v2 */
    public const PRICING_MODEL_PRICING_MODEL_V2 = 2;
    /** Pricing model v3 */
    public const PRICING_MODEL_PRICING_MODEL_V3 = 3;
    /** Free order */
    public const SUBSCRIPTION_PLAN_FREE_ORDER = 0;
    /** Pay As You Grow (PAYG) */
    public const SUBSCRIPTION_PLAN_PAY_AS_YOU_GROW_PAYG = 1;
    /** Committed Volume Plan (CVP) */
    public const SUBSCRIPTION_PLAN_COMMITTED_VOLUME_PLAN_CVP = 2;
    /** Flexible Committed Volume Plan (CVP Flex) */
    public const SUBSCRIPTION_PLAN_FLEXIBLE_COMMITTED_VOLUME_PLAN = 3;
    /** PACK */
    public const SUBSCRIPTION_PLAN_PACK = 4;
    /** DevKit */
    public const SUBSCRIPTION_PLAN_DEVKIT = 5;
    /** Activate */
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
     * - `ContractInfosGet::GROUP_TYPE_BASIC`
     * - `ContractInfosGet::GROUP_TYPE_CHANNEL`
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
     * Searches for contracts IDs that have the listed external (BSS) contractId. The elements of the list are separated by comma.
     *
     * @var string
     */
    protected ?string $contractIds = null;
    /**
     * Searches for contracts with communication end time superior or equal to given time (in milliseconds since Unix Epoch).
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
     * - `ContractInfosGet::PRICING_MODEL_PRICING_MODEL_V1`
     * - `ContractInfosGet::PRICING_MODEL_PRICING_MODEL_V2`
     * - `ContractInfosGet::PRICING_MODEL_PRICING_MODEL_V3`
     *
     * @var int
     */
    protected ?int $pricingModel = null;
    /**
     * Searches for contracts with the given subscription plan:
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_FREE_ORDER`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_PAY_AS_YOU_GROW_PAYG`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_COMMITTED_VOLUME_PLAN_CVP`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_FLEXIBLE_COMMITTED_VOLUME_PLAN`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_PACK`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_DEVKIT`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_ACTIVATE`
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
    protected $query = array('name', 'groupId', 'groupType', 'deep', 'up', 'orderIds', 'contractIds', 'fromTime', 'toTime', 'tokenDuration', 'pricingModel', 'subscriptionPlan', 'geolocationMode', 'fields', 'limit', 'offset', 'pageId', 'authorizations');
    /**
     * @param string $name Searches for contracts containing the given text in their name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @param string $groupId Searches for contracts who are attached to the given group
     */
    function setGroupId(?string $groupId)
    {
        $this->groupId = $groupId;
    }
    /**
     * @param int $groupType Searches for contracts that are attached to a specific group type.
     * - `ContractInfosGet::GROUP_TYPE_BASIC`
     * - `ContractInfosGet::GROUP_TYPE_CHANNEL`
     */
    function setGroupType(?int $groupType)
    {
        $this->groupType = $groupType;
    }
    /**
     * @param bool $deep Searches for contracts that are attached to the given group and its descendants
     */
    function setDeep(?bool $deep)
    {
        $this->deep = $deep;
    }
    /**
     * @param bool $up Searches for contracts that are attached to the given group and its ancestors
     */
    function setUp(?bool $up)
    {
        $this->up = $up;
    }
    /**
     * @param string $orderIds Searches for contracts with the listed orderIds. The elements of the list are separated by comma.
     */
    function setOrderIds(?string $orderIds)
    {
        $this->orderIds = $orderIds;
    }
    /**
     * @param string $contractIds Searches for contracts IDs that have the listed external (BSS) contractId. The elements of the list are separated by comma.
     */
    function setContractIds(?string $contractIds)
    {
        $this->contractIds = $contractIds;
    }
    /**
     * @param int $fromTime Searches for contracts with communication end time superior or equal to given time (in milliseconds since Unix Epoch).
     */
    function setFromTime(?int $fromTime)
    {
        $this->fromTime = $fromTime;
    }
    /**
     * @param int $toTime Searches for contracts with start time inferior to given time (in milliseconds since Unix Epoch).
     */
    function setToTime(?int $toTime)
    {
        $this->toTime = $toTime;
    }
    /**
     * @param int $tokenDuration Searches for contracts with the given token duration in months.
     */
    function setTokenDuration(?int $tokenDuration)
    {
        $this->tokenDuration = $tokenDuration;
    }
    /**
     * @param int $pricingModel Searches for contracts with a given pricing model 
     * - `ContractInfosGet::PRICING_MODEL_PRICING_MODEL_V1`
     * - `ContractInfosGet::PRICING_MODEL_PRICING_MODEL_V2`
     * - `ContractInfosGet::PRICING_MODEL_PRICING_MODEL_V3`
     */
    function setPricingModel(?int $pricingModel)
    {
        $this->pricingModel = $pricingModel;
    }
    /**
     * @param int $subscriptionPlan Searches for contracts with the given subscription plan:
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_FREE_ORDER`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_PAY_AS_YOU_GROW_PAYG`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_COMMITTED_VOLUME_PLAN_CVP`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_FLEXIBLE_COMMITTED_VOLUME_PLAN`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_PACK`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_DEVKIT`
     * - `ContractInfosGet::SUBSCRIPTION_PLAN_ACTIVATE`
     */
    function setSubscriptionPlan(?int $subscriptionPlan)
    {
        $this->subscriptionPlan = $subscriptionPlan;
    }
    /**
     * @param int $geolocationMode Searches for contracts with the given geolocation mode (level)
     * 1 (ATLAS)
     * 2 (ATLAS_WIFI)
     * 3 (N/A)
     * 4 (ATLAS_POV)
     * 5 (ATLAS_BUBBLE)
     * 6 (ATLAS_WIFI_PRIVATEDB)
     */
    function setGeolocationMode(?int $geolocationMode)
    {
        $this->geolocationMode = $geolocationMode;
    }
    /**
     * @param string $fields Defines the other available fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
    }
    /**
     * @param int $limit The maximum number of items to return
     */
    function setLimit(?int $limit)
    {
        $this->limit = $limit;
    }
    /**
     * @param int $offset The number of items to skip
     */
    function setOffset(?int $offset)
    {
        $this->offset = $offset;
    }
    /**
     * @param string $pageId Token representing the page to retrieve
     */
    function setPageId(?string $pageId)
    {
        $this->pageId = $pageId;
    }
    /**
     * @param bool $authorizations if true, we return the list of actions and resources the user has access
     */
    function setAuthorizations(?bool $authorizations)
    {
        $this->authorizations = $authorizations;
    }
}