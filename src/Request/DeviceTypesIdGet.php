<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
/**
 * Retrieve information about a device type.
 * 
 */
class DeviceTypesIdGet extends Definition
{
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    /**
     * Defines the other available API user's fields to be returned in the response.
     * 
     *
     * @var string
     */
    protected ?string $fields = null;
    protected $query = array('authorizations', 'fields');
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
}