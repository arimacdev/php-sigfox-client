<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve information about a given user. The id can also be the user's email address.
 * 
 */
class UsersIdGet extends Definition
{
    /**
     * Defines the other available fields to be returned in the response.
     * 
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'fields', 'string'), new PrimitiveSerializer(self::class, 'authorizations', 'bool'));
    protected $query = array('fields', 'authorizations');
    protected $validations = array('fields' => array('required', 'in:userRoles(group(name\\,type\\,level\\,bssId\\,customerBssId)\\,profile(name\\,roles(name\\,perms(name))))'), 'authorizations' => array('required'));
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
}