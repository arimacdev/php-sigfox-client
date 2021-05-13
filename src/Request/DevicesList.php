<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Retrieve a list of devices according to visibility permissions and request filters.
 */
class DevicesList extends Definition
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'), new ArraySerializer(self::class, 'groupIds', new PrimitiveSerializer(self::class, 'groupIds', 'string')), new PrimitiveSerializer(self::class, 'deep', 'bool'), new PrimitiveSerializer(self::class, 'authorizations', 'bool'), new PrimitiveSerializer(self::class, 'deviceTypeId', 'string'), new PrimitiveSerializer(self::class, 'operatorId', 'string'), new PrimitiveSerializer(self::class, 'sort', 'string'), new PrimitiveSerializer(self::class, 'minId', 'string'), new PrimitiveSerializer(self::class, 'maxId', 'string'), new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'offset', 'int'), new PrimitiveSerializer(self::class, 'pageId', 'string'));
    protected $query = array('id', 'groupIds', 'deep', 'authorizations', 'deviceTypeId', 'operatorId', 'sort', 'minId', 'maxId', 'fields', 'limit', 'offset', 'pageId');
    protected $validations = array('id' => array('required'), 'groupIds' => array('required'), 'deep' => array('required'), 'authorizations' => array('required'), 'deviceTypeId' => array('required'), 'operatorId' => array('required'), 'sort' => array('required', 'in:id,-id,name,-name,lastCom,-lastCom'), 'minId' => array('required'), 'maxId' => array('required'), 'fields' => array('required', 'in:deviceType(name),group(name\\,type\\,level\\,bssId\\,customerBssId),contract(name),productCertificate(key),modemCertificate(key)'), 'limit' => array('required'), 'offset' => array('required'), 'pageId' => array('required'));
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
}