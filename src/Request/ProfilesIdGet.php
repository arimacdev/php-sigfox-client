<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class ProfilesIdGet extends Definition
{
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * if true, return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    protected $query = array('fields', 'authorizations');
    /**
     * @param string $fields Defines the other available fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
    }
    /**
     * @param bool $authorizations if true, return the list of actions and resources the user has access
     */
    function setAuthorizations(?bool $authorizations)
    {
        $this->authorizations = $authorizations;
    }
}