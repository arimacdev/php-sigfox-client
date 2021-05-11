<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve information about a given device.
 * 
 */
class DevicesIdGet extends Definition
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
     *
     * @var string
     */
    protected ?string $fields = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'authorizations', 'bool'), new PrimitiveSerializer(self::class, 'fields', 'string'));
    protected $query = array('authorizations', 'fields');
    protected $validations = array('authorizations' => array('required'), 'fields' => array('required', 'in:deviceType(name),group(name\\,type\\,level\\,bssId\\,customerBssId),contract(name),productCertificate(key),modemCertificate(key)'));
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
}