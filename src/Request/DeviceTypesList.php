<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Retrieve a list of device types according to visibility permissions and request filters.
 */
class DeviceTypesList extends Request
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
     * - {@see DeviceTypesList::PAYLOAD_TYPE_REGULAR}
     * - {@see DeviceTypesList::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     * - {@see DeviceTypesList::PAYLOAD_TYPE_GEOLOCATION}
     * - {@see DeviceTypesList::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     * - {@see DeviceTypesList::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     * - {@see DeviceTypesList::PAYLOAD_TYPE_SENSITV2}
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
    /**
     * @internal
     */
    protected array $query = array('name', 'groupIds', 'deep', 'contractId', 'payloadType', 'authorizations', 'sort', 'fields', 'limit', 'offset', 'pageId');
    /**
     * @internal
     */
    protected array $validations = array('sort' => array('in:id,-id,name,-name', 'nullable'), 'fields' => array('in:group(name\\,type\\,level),contract(name),geolocPayloadConfig(name)', 'nullable'));
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
     * Getter for name
     *
     * @internal
     *
     * @return string Search returns all Device Type names containing the value. Example: ?name=sig
     *                
     */
    public function getName() : ?string
    {
        return $this->name;
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
     * Getter for groupIds
     *
     * @internal
     *
     * @return string[] Search for device types which are attached to a Group. Example:
     *                  ?groupIds=57309674171c857460043087,57309674171c857460043088
     *                  
     */
    public function getGroupIds() : ?array
    {
        return $this->groupIds;
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
     * Getter for deep
     *
     * @internal
     *
     * @return bool If a group identifier is specified, also includes its subgroups.
     */
    public function getDeep() : ?bool
    {
        return $this->deep;
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
     * Getter for contractId
     *
     * @internal
     *
     * @return string Searches for device types which are attached to the given contract.
     */
    public function getContractId() : ?string
    {
        return $this->contractId;
    }
    /**
     * Setter for payloadType
     *
     * @param int $payloadType Searches device types by payload type
     *                         
     *                         - {@see DeviceTypesList::PAYLOAD_TYPE_REGULAR}
     *                         - {@see DeviceTypesList::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     *                         - {@see DeviceTypesList::PAYLOAD_TYPE_GEOLOCATION}
     *                         - {@see DeviceTypesList::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     *                         - {@see DeviceTypesList::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     *                         - {@see DeviceTypesList::PAYLOAD_TYPE_SENSITV2}
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
     * Getter for payloadType
     *
     * @internal
     *
     * @return int Searches device types by payload type
     *             
     *             - {@see DeviceTypesList::PAYLOAD_TYPE_REGULAR}
     *             - {@see DeviceTypesList::PAYLOAD_TYPE_CUSTOM_GRAMMAR}
     *             - {@see DeviceTypesList::PAYLOAD_TYPE_GEOLOCATION}
     *             - {@see DeviceTypesList::PAYLOAD_TYPE_DISPLAY_IN_ASCII}
     *             - {@see DeviceTypesList::PAYLOAD_TYPE_RADIO_PLANNING_FRAME}
     *             - {@see DeviceTypesList::PAYLOAD_TYPE_SENSITV2}
     *             
     */
    public function getPayloadType() : ?int
    {
        return $this->payloadType;
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
     * Getter for sort
     *
     * @internal
     *
     * @return string The field on which the list will be sorted. (field to sort ascending or -field to sort
     *                descending).
     */
    public function getSort() : ?string
    {
        return $this->sort;
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
     * Getter for fields
     *
     * @internal
     *
     * @return string Defines the other available API user's fields to be returned in the response.
     *                
     */
    public function getFields() : ?string
    {
        return $this->fields;
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
     * Getter for limit
     *
     * @internal
     *
     * @return int Defines the maximum number of items to return
     */
    public function getLimit() : ?int
    {
        return $this->limit;
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
     * Getter for offset
     *
     * @internal
     *
     * @return int Defines the number of items to skip
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
        $serializers = array('name' => new PrimitiveSerializer('string'), 'groupIds' => new ArraySerializer(new PrimitiveSerializer('string')), 'deep' => new PrimitiveSerializer('bool'), 'contractId' => new PrimitiveSerializer('string'), 'payloadType' => new PrimitiveSerializer('int'), 'authorizations' => new PrimitiveSerializer('bool'), 'sort' => new PrimitiveSerializer('string'), 'fields' => new PrimitiveSerializer('string'), 'limit' => new PrimitiveSerializer('int'), 'offset' => new PrimitiveSerializer('int'), 'pageId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}