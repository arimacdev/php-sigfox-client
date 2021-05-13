<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Retrieve a list of device types according to visibility permissions and request filters.
 */
class DeviceTypesList extends Definition
{
    /**
     * Regular (raw payload)
     */
    public const PAYLOAD_TYPE_REGULAR = 2;
    /**
     * Custom grammar
     */
    public const PAYLOAD_TYPE_CUSTOM_GRAMMAR = 3;
    /**
     * Geolocation
     */
    public const PAYLOAD_TYPE_GEOLOCATION = 4;
    /**
     * Display in ASCII
     */
    public const PAYLOAD_TYPE_DISPLAY_IN_ASCII = 5;
    /**
     * Radio planning frame
     */
    public const PAYLOAD_TYPE_RADIO_PLANNING_FRAME = 6;
    /**
     * Sensitv2
     */
    public const PAYLOAD_TYPE_SENSITV2 = 9;
    /**
     * Search returns all Device Type names containing the value. Example: ?name=sig
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Search for device types which are attached to a Group. Example:
     * ?groupIds=57309674171c857460043087,57309674171c857460043088
     *
     * @var string[]
     */
    protected ?array $groupIds = null;
    /**
     * If a group identifier is specified, also includes its subgroups.
     *
     * @var bool
     */
    protected ?bool $deep = null;
    /**
     * Searches for device types which are attached to the given contract.
     *
     * @var string
     */
    protected ?string $contractId = null;
    /**
     * Searches device types by payload type
     * 
     * - {@link DeviceTypesList::PAYLOAD_TYPE_REGULAR}
     * - {@link DeviceTypesList::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     * - {@link DeviceTypesList::PAYLOAD_TYPE_GEOLOCATION}
     * - {@link DeviceTypesList::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     * - {@link DeviceTypesList::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     * - {@link DeviceTypesList::PAYLOAD_TYPE_SENSITV2}
     *
     * @var int
     */
    protected ?int $payloadType = null;
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    /**
     * The field on which the list will be sorted. (field to sort ascending or -field to sort descending).
     *
     * @var string
     */
    protected ?string $sort = null;
    /**
     * Defines the other available API user's fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * Defines the maximum number of items to return
     *
     * @var int
     */
    protected ?int $limit = null;
    /**
     * Defines the number of items to skip
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'name', 'string'), new ArraySerializer(self::class, 'groupIds', new PrimitiveSerializer(self::class, 'groupIds', 'string')), new PrimitiveSerializer(self::class, 'deep', 'bool'), new PrimitiveSerializer(self::class, 'contractId', 'string'), new PrimitiveSerializer(self::class, 'payloadType', 'int'), new PrimitiveSerializer(self::class, 'authorizations', 'bool'), new PrimitiveSerializer(self::class, 'sort', 'string'), new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'offset', 'int'), new PrimitiveSerializer(self::class, 'pageId', 'string'));
    protected $query = array('name', 'groupIds', 'deep', 'contractId', 'payloadType', 'authorizations', 'sort', 'fields', 'limit', 'offset', 'pageId');
    protected $validations = array('name' => array('required'), 'groupIds' => array('required'), 'deep' => array('required'), 'contractId' => array('required'), 'payloadType' => array('required'), 'authorizations' => array('required'), 'sort' => array('required', 'in:id,-id,name,-name'), 'fields' => array('required', 'in:group(name\\,type\\,level),contract(name),geolocPayloadConfig(name)'), 'limit' => array('required'), 'offset' => array('required'), 'pageId' => array('required'));
    /**
     * Setter for name
     *
     * @param string $name Search returns all Device Type names containing the value. Example: ?name=sig
     *                     
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Setter for groupIds
     *
     * @param string[] $groupIds Search for device types which are attached to a Group. Example:
     *                           ?groupIds=57309674171c857460043087,57309674171c857460043088
     *                           
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
     * @param bool $deep If a group identifier is specified, also includes its subgroups.
     *
     * @return self To use in method chains
     */
    public function setDeep(?bool $deep) : self
    {
        $this->deep = $deep;
        return $this;
    }
    /**
     * Setter for contractId
     *
     * @param string $contractId Searches for device types which are attached to the given contract.
     *
     * @return self To use in method chains
     */
    public function setContractId(?string $contractId) : self
    {
        $this->contractId = $contractId;
        return $this;
    }
    /**
     * Setter for payloadType
     *
     * @param int $payloadType Searches device types by payload type
     *                         
     *                         - {@link DeviceTypesList::PAYLOAD_TYPE_REGULAR}
     *                         - {@link DeviceTypesList::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     *                         - {@link DeviceTypesList::PAYLOAD_TYPE_GEOLOCATION}
     *                         - {@link DeviceTypesList::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     *                         - {@link DeviceTypesList::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     *                         - {@link DeviceTypesList::PAYLOAD_TYPE_SENSITV2}
     *                         
     *
     * @return self To use in method chains
     */
    public function setPayloadType(?int $payloadType) : self
    {
        $this->payloadType = $payloadType;
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
     * Setter for sort
     *
     * @param string $sort The field on which the list will be sorted. (field to sort ascending or -field to sort
     *                     descending).
     *
     * @return self To use in method chains
     */
    public function setSort(?string $sort) : self
    {
        $this->sort = $sort;
        return $this;
    }
    /**
     * Setter for fields
     *
     * @param string $fields Defines the other available API user's fields to be returned in the response.
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
     * @param int $limit Defines the maximum number of items to return
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
     * @param int $offset Defines the number of items to skip
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