<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
class DevicesIdCertificateGet extends Definition
{
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    protected $query = array('fields');
    /**
     * @param string $fields Defines the other available fields to be returned in the response.
     */
    function setFields(?string $fields)
    {
        $this->fields = $fields;
    }
}