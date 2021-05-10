<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
/**
 * Retrieve the product certificate associated with a device already registered.
 * 
 */
class DevicesIdCertificateProduct extends Definition
{
    /**
     * Defines the other available fields to be returned in the response.
     * 
     *
     * @var string
     */
    protected ?string $fields = null;
    protected $query = array('fields');
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