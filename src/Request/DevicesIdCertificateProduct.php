<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve the product certificate associated with a device already registered.
 */
class DevicesIdCertificateProduct extends Definition
{
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'fields', 'string'));
    protected $query = array('fields');
    protected $validations = array('fields' => array('required', 'in:manufacturer(name)'));
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