<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\OneOf;
/**
 * Retrieve a list of devices according to visibility permissions and request filters.
 */
class DevicesList extends Request
{
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * Returns all devices under the given groups (included sub-groups if the parameter deep is equals to true)
     *
     * @var string[]
     */
    protected ?array $groupIds = null;
    /**
     * if true, we search by groups and subgroups through the parameter 'groupIds'
     *
     * @var bool
     */
    protected ?bool $deep = null;
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    /**
     * Returns all devices of the given device type
     *
     * @var string
     */
    protected ?string $deviceTypeId = null;
    /**
     * Returns all devices under the given operator
     *
     * @var string
     */
    protected ?string $operatorId = null;
    /**
     * The field on which the list will be sorted. (field to sort ascending or -field to sort descending)
     *
     * @var string
     */
    protected ?string $sort = null;
    /**
     * The minimal id of the filtered range, only availble when sort parameter is set to "id" or "-id"
     *
     * @var string
     */
    protected ?string $minId = null;
    /**
     * The maximal id of the filtered range, only availble when sort parameter is set to "id" or "-id"
     *
     * @var string
     */
    protected ?string $maxId = null;
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
     * @internal
     */
    protected array $query = array('id', 'groupIds', 'deep', 'authorizations', 'deviceTypeId', 'operatorId', 'sort', 'minId', 'maxId', 'fields', 'limit', 'offset', 'pageId');
    /**
     * Setter for id
     *
     * @param string $id The device's identifier (hexadecimal format)
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
     * @internal
     *
     * @return string The device's identifier (hexadecimal format)
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for groupIds
     *
     * @param string[] $groupIds Returns all devices under the given groups (included sub-groups if the parameter
     *                           deep is equals to true)
     *
     * @return self To use in method chains
     */
    public function setGroupIds(?array $groupIds) : self
    {
        $this->groupIds = $groupIds;
        return $this;
    }
    /**
     * Getter for groupIds
     *
     * @internal
     *
     * @return string[] Returns all devices under the given groups (included sub-groups if the parameter deep is
     *                  equals to true)
     */
    public function getGroupIds() : ?array
    {
        return $this->groupIds;
    }
    /**
     * Setter for deep
     *
     * @param bool $deep if true, we search by groups and subgroups through the parameter 'groupIds'
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
     * @internal
     *
     * @return bool if true, we search by groups and subgroups through the parameter 'groupIds'
     */
    public function getDeep() : ?bool
    {
        return $this->deep;
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
     * @internal
     *
     * @return bool if true, we return the list of actions and resources the user has access
     */
    public function getAuthorizations() : ?bool
    {
        return $this->authorizations;
    }
    /**
     * Setter for deviceTypeId
     *
     * @param string $deviceTypeId Returns all devices of the given device type
     *
     * @return self To use in method chains
     */
    public function setDeviceTypeId(?string $deviceTypeId) : self
    {
        $this->deviceTypeId = $deviceTypeId;
        return $this;
    }
    /**
     * Getter for deviceTypeId
     *
     * @internal
     *
     * @return string Returns all devices of the given device type
     */
    public function getDeviceTypeId() : ?string
    {
        return $this->deviceTypeId;
    }
    /**
     * Setter for operatorId
     *
     * @param string $operatorId Returns all devices under the given operator
     *
     * @return self To use in method chains
     */
    public function setOperatorId(?string $operatorId) : self
    {
        $this->operatorId = $operatorId;
        return $this;
    }
    /**
     * Getter for operatorId
     *
     * @internal
     *
     * @return string Returns all devices under the given operator
     */
    public function getOperatorId() : ?string
    {
        return $this->operatorId;
    }
    /**
     * Setter for sort
     *
     * @param string $sort The field on which the list will be sorted. (field to sort ascending or -field to sort
     *                     descending)
     *
     * @return self To use in method chains
     */
    public function setSort(?string $sort) : self
    {
        $this->sort = $sort;
        return $this;
    }
    /**
     * Getter for sort
     *
     * @internal
     *
     * @return string The field on which the list will be sorted. (field to sort ascending or -field to sort
     *                descending)
     */
    public function getSort() : ?string
    {
        return $this->sort;
    }
    /**
     * Setter for minId
     *
     * @param string $minId The minimal id of the filtered range, only availble when sort parameter is set to "id" or
     *                      "-id"
     *
     * @return self To use in method chains
     */
    public function setMinId(?string $minId) : self
    {
        $this->minId = $minId;
        return $this;
    }
    /**
     * Getter for minId
     *
     * @internal
     *
     * @return string The minimal id of the filtered range, only availble when sort parameter is set to "id" or "-id"
     */
    public function getMinId() : ?string
    {
        return $this->minId;
    }
    /**
     * Setter for maxId
     *
     * @param string $maxId The maximal id of the filtered range, only availble when sort parameter is set to "id" or
     *                      "-id"
     *
     * @return self To use in method chains
     */
    public function setMaxId(?string $maxId) : self
    {
        $this->maxId = $maxId;
        return $this;
    }
    /**
     * Getter for maxId
     *
     * @internal
     *
     * @return string The maximal id of the filtered range, only availble when sort parameter is set to "id" or "-id"
     */
    public function getMaxId() : ?string
    {
        return $this->maxId;
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
     * @internal
     *
     * @return string Token representing the page to retrieve
     */
    public function getPageId() : ?string
    {
        return $this->pageId;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'groupIds' => new ArraySerializer(new PrimitiveSerializer('string')), 'deep' => new PrimitiveSerializer('bool'), 'authorizations' => new PrimitiveSerializer('bool'), 'deviceTypeId' => new PrimitiveSerializer('string'), 'operatorId' => new PrimitiveSerializer('string'), 'sort' => new PrimitiveSerializer('string'), 'minId' => new PrimitiveSerializer('string'), 'maxId' => new PrimitiveSerializer('string'), 'fields' => new PrimitiveSerializer('string'), 'limit' => new PrimitiveSerializer('int'), 'offset' => new PrimitiveSerializer('int'), 'pageId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('sort' => array(new OneOf(array('id', '-id', 'name', '-name', 'lastCom', '-lastCom'))), 'fields' => array(new OneOf(array('deviceType(name)', 'group(name,type,level,bssId,customerBssId)', 'contract(name)', 'productCertificate(key)', 'modemCertificate(key)'))));
        return $rules;
    }
}