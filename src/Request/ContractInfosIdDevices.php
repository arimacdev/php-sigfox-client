<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\OneOf;
/**
 * Retrieve a list of devices according to visibility permissions and request filters.
 */
class ContractInfosIdDevices extends Request
{
    /**
     * Returns only devices of the given device type
     *
     * @var string
     */
    protected ?string $deviceTypeId = null;
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
     * Token representing the page to retrieve
     *
     * @var string
     */
    protected ?string $pageId = null;
    /**
     * @internal
     */
    protected array $query = array('deviceTypeId', 'fields', 'limit', 'pageId');
    /**
     * Setter for deviceTypeId
     *
     * @param string $deviceTypeId Returns only devices of the given device type
     *
     * @return static To use in method chains
     */
    public function setDeviceTypeId(?string $deviceTypeId)
    {
        $this->deviceTypeId = $deviceTypeId;
        return $this;
    }
    /**
     * Getter for deviceTypeId
     *
     * @internal
     *
     * @return string Returns only devices of the given device type
     */
    public function getDeviceTypeId() : ?string
    {
        return $this->deviceTypeId;
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
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('deviceTypeId' => new PrimitiveSerializer('string'), 'fields' => new PrimitiveSerializer('string'), 'limit' => new PrimitiveSerializer('int'), 'pageId' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('fields' => array(new OneOf(array('deviceType(name)', 'group(name,type,level,bssId,customerBssId)', 'contract(name)', 'productCertificate(key)', 'modemCertificate(name)'))));
        return $rules;
    }
}