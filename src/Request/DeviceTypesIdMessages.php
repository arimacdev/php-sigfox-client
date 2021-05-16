<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve a list of messages for a given device types with a 3-day history.
 */
class DeviceTypesIdMessages extends Request
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
    /**
     * @internal
     */
    protected array $query = array('fields', 'since', 'before', 'authorizations', 'limit', 'offset');
    /**
     * @internal
     */
    protected array $validations = array('fields' => array('in:oob,ackRequired,device(name),rinfos(cbStatus\\,rep\\,repetitions\\,baseStation(name)),downlinkAnswerStatus(baseStation(name))', 'nullable'));
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
     * @return string Defines the other available API user's fields to be returned in the response.
     *                
     */
    public function getFields() : ?string
    {
        return $this->fields;
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
     * Getter for since
     *
     * @return int Starting timestamp (in milliseconds since Unix Epoch).
     */
    public function getSince() : ?int
    {
        return $this->since;
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
     * Getter for before
     *
     * @return int Ending timestamp (in milliseconds since Unix Epoch).
     */
    public function getBefore() : ?int
    {
        return $this->before;
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
     * @return bool if true, we return the list of actions and resources the user has access
     */
    public function getAuthorizations() : ?bool
    {
        return $this->authorizations;
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
     * @return int Defines the number of items to skip
     */
    public function getOffset() : ?int
    {
        return $this->offset;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('fields' => new PrimitiveSerializer(self::class, 'fields', 'string'), 'since' => new PrimitiveSerializer(self::class, 'since', 'int'), 'before' => new PrimitiveSerializer(self::class, 'before', 'int'), 'authorizations' => new PrimitiveSerializer(self::class, 'authorizations', 'bool'), 'limit' => new PrimitiveSerializer(self::class, 'limit', 'int'), 'offset' => new PrimitiveSerializer(self::class, 'offset', 'int'));
    }
}