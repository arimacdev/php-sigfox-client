<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve information about a given device.
 */
class DevicesIdGet extends Request
{
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    protected array $query = array('authorizations', 'fields');
    protected array $validations = array('fields' => array('in:deviceType(name),group(name\\,type\\,level\\,bssId\\,customerBssId),contract(name),productCertificate(key),modemCertificate(key)', 'nullable'));
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
     * @return string Defines the other available fields to be returned in the response.
     *                
     */
    public function getFields() : ?string
    {
        return $this->fields;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('authorizations' => new PrimitiveSerializer(self::class, 'authorizations', 'bool'), 'fields' => new PrimitiveSerializer(self::class, 'fields', 'string'));
    }
}