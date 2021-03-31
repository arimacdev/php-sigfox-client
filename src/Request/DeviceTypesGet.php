<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DeviceTypesGet extends Definition
{
    /** Regular (raw payload) */
    public const PAYLOAD_TYPE_REGULAR = 2;
    /** Custom grammar */
    public const PAYLOAD_TYPE_CUSTOM_GRAMMAR = 3;
    /** Geolocation */
    public const PAYLOAD_TYPE_GEOLOCATION = 4;
    /** Display in ASCII */
    public const PAYLOAD_TYPE_DISPLAY_IN_ASCII = 5;
    /** Radio planning frame */
    public const PAYLOAD_TYPE_RADIO_PLANNING_FRAME = 6;
    /** Sensitv2 */
    public const PAYLOAD_TYPE_SENSITV2 = 9;
    /**
     * Search returns all Device Type names containing the value. Example: ?name=sig
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Search for device types which are attached to a Group. Example: ?groupIds=57309674171c857460043087,57309674171c857460043088
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
     * - `DeviceTypesGet::PAYLOAD_TYPE_REGULAR`
     * - `DeviceTypesGet::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `DeviceTypesGet::PAYLOAD_TYPE_GEOLOCATION`
     * - `DeviceTypesGet::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `DeviceTypesGet::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `DeviceTypesGet::PAYLOAD_TYPE_SENSITV2`
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
    protected $query = array('name', 'groupIds', 'deep', 'contractId', 'payloadType', 'authorizations', 'sort', 'fields', 'limit', 'offset', 'pageId');
    /**
     * @param string $name Search returns all Device Type names containing the value. Example: ?name=sig
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @param string[] $groupIds Search for device types which are attached to a Group. Example: ?groupIds=57309674171c857460043087,57309674171c857460043088
     */
    function setGroupIds(?array $groupIds)
    {
        $this->groupIds = $groupIds;
    }
    /**
     * @param bool $deep If a group identifier is specified, also includes its subgroups.
     */
    function setDeep(?bool $deep)
    {
        $this->deep = $deep;
    }
    /**
     * @param string $contractId Searches for device types which are attached to the given contract.
     */
    function setContractId(?string $contractId)
    {
        $this->contractId = $contractId;
    }
    /**
     * @param int $payloadType Searches device types by payload type
     * - `DeviceTypesGet::PAYLOAD_TYPE_REGULAR`
     * - `DeviceTypesGet::PAYLOAD_TYPE_CUSTOM_GRAMMAR`
     * - `DeviceTypesGet::PAYLOAD_TYPE_GEOLOCATION`
     * - `DeviceTypesGet::PAYLOAD_TYPE_DISPLAY_IN_ASCII`
     * - `DeviceTypesGet::PAYLOAD_TYPE_RADIO_PLANNING_FRAME`
     * - `DeviceTypesGet::PAYLOAD_TYPE_SENSITV2`
     */
    function setPayloadType(?int $payloadType)
    {
        $this->payloadType = $payloadType;
    }
    /**
     * @param bool $authorizations if true, we return the list of actions and resources the user has access
     */
    function setAuthorizations(?bool $authorizations)
    {
        $this->authorizations = $authorizations;
    }
    /**
     * @param string $sort The field on which the list will be sorted. (field to sort ascending or -field to sort descending).
     */
    function setSort(?string $sort)
    {
        $this->sort = $sort;
    }
    /**
     * @param string $fields Defines the other available API user's fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
    }
    /**
     * @param int $limit Defines the maximum number of items to return
     */
    function setLimit(?int $limit)
    {
        $this->limit = $limit;
    }
    /**
     * @param int $offset Defines the number of items to skip
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
}