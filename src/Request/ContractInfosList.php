<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
/**
 * Retrieve a list of contracts according to visibility permissions and request filters.
 * 
 */
class ContractInfosList extends Definition
{
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
     * - 2 -> BASIC
     * - 9 -> CHANNEL
     * 
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
     * 1 -> Pricing model v1
     * 2 -> Pricing model v2
     * 3 -> Pricing model v3
     * 
     *
     * @var int
     */
    protected ?int $pricingModel = null;
    /**
     * Searches for contracts with the given subscription plan:
     * 0 -> Free order
     * 1 -> Pay As You Grow (PAYG)
     * 2 -> Committed Volume Plan (CVP)
     * 3 -> Flexible Committed Volume Plan (CVP Flex)
     * 4 -> PACK
     * 5 -> DevKit
     * 6 -> Activate
     * 
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
    protected $query = array('name', 'groupId', 'groupType', 'deep', 'up', 'orderIds', 'contractIds', 'fromTime', 'toTime', 'tokenDuration', 'pricingModel', 'subscriptionPlan', 'geolocationMode', 'fields', 'limit', 'offset', 'pageId', 'authorizations');
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
     * @param int $groupType Searches for contracts that are attached to a specific group type.
     *                       - 2 -> BASIC
     *                       - 9 -> CHANNEL
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
     * @param int $pricingModel Searches for contracts with a given pricing model 
     *                          1 -> Pricing model v1
     *                          2 -> Pricing model v2
     *                          3 -> Pricing model v3
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
     * Setter for subscriptionPlan
     *
     * @param int $subscriptionPlan Searches for contracts with the given subscription plan:
     *                              0 -> Free order
     *                              1 -> Pay As You Grow (PAYG)
     *                              2 -> Committed Volume Plan (CVP)
     *                              3 -> Flexible Committed Volume Plan (CVP Flex)
     *                              4 -> PACK
     *                              5 -> DevKit
     *                              6 -> Activate
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