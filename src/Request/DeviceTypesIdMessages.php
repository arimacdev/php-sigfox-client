<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of messages for a given device types with a 3-day history.
 */
class DeviceTypesIdMessages extends Definition
{
    /**
     * Defines the other available API user's fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * Starting timestamp (in milliseconds since Unix Epoch).
     *
     * @var int
     */
    protected ?int $since = null;
    /**
     * Ending timestamp (in milliseconds since Unix Epoch).
     *
     * @var int
     */
    protected ?int $before = null;
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'since', 'int'), new PrimitiveSerializer(self::class, 'before', 'int'), new PrimitiveSerializer(self::class, 'authorizations', 'bool'), new PrimitiveSerializer(self::class, 'limit', 'int'), new PrimitiveSerializer(self::class, 'offset', 'int'));
    protected $query = array('fields', 'since', 'before', 'authorizations', 'limit', 'offset');
    protected $validations = array('fields' => array('required', 'in:oob,ackRequired,device(name),rinfos(cbStatus\\,rep\\,repetitions\\,baseStation(name)),downlinkAnswerStatus(baseStation(name))'), 'since' => array('required'), 'before' => array('required'), 'authorizations' => array('required'), 'limit' => array('required'), 'offset' => array('required'));
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
     * Setter for since
     *
     * @param int $since Starting timestamp (in milliseconds since Unix Epoch).
     *
     * @return self To use in method chains
     */
    public function setSince(?int $since) : self
    {
        $this->since = $since;
        return $this;
    }
    /**
     * Setter for before
     *
     * @param int $before Ending timestamp (in milliseconds since Unix Epoch).
     *
     * @return self To use in method chains
     */
    public function setBefore(?int $before) : self
    {
        $this->before = $before;
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
}