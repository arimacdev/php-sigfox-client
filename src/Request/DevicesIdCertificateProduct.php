<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Retrieve the product certificate associated with a device already registered.
 */
class DevicesIdCertificateProduct extends Request
{
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * @internal
     */
    protected array $query = array('fields');
    /**
     * @internal
     */
    protected array $validations = array('fields' => array('in:manufacturer(name)', 'nullable'));
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
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('fields' => new PrimitiveSerializer(self::class, 'fields', 'string'));
    }
}