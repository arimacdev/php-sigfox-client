<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of devices according to visibility permissions and request filters.
 * 
 */
class ContractInfosIdDevices extends Definition
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'deviceTypeId', 'string'), new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'pageId', 'string'));
    protected $query = array('deviceTypeId', 'fields', 'limit', 'pageId');
    protected $validations = array('deviceTypeId' => array('required'), 'fields' => array('required', 'in:deviceType(name),group(name\\,type\\,level\\,bssId\\,customerBssId),contract(name),productCertificate(key),modemCertificate(name)'), 'limit' => array('required'), 'pageId' => array('required'));
    /**
     * Setter for deviceTypeId
     *
     * @param string $deviceTypeId Returns only devices of the given device type
     *
     * @return self To use in method chains
     */
    public function setDeviceTypeId(?string $deviceTypeId) : self
    {
        $this->deviceTypeId = $deviceTypeId;
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