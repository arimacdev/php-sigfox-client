<?php

namespace Arimac\Sigfox\Definition\ErrorContent;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class ErrorsItem extends Definition
{
    /**
     * Describe where the problem occurred. Can be from body, query or path.
     * 
     *
     * @var string
     */
    protected ?string $type = null;
    /**
     * Name of the field or parameter where the specific error occurred.
     * 
     *
     * @var string
     */
    protected ?string $field = null;
    /**
     * Readable specific error for the previously defined field.
     * 
     *
     * @var string
     */
    protected ?string $message = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'type', 'string'), new PrimitiveSerializer(self::class, 'field', 'string'), new PrimitiveSerializer(self::class, 'message', 'string'));
    /**
     * Setter for type
     *
     * @param string $type Describe where the problem occurred. Can be from body, query or path.
     *                     
     *
     * @return self To use in method chains
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Getter for type
     *
     * @return string Describe where the problem occurred. Can be from body, query or path.
     *                
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Setter for field
     *
     * @param string $field Name of the field or parameter where the specific error occurred.
     *                      
     *
     * @return self To use in method chains
     */
    public function setField(?string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * Getter for field
     *
     * @return string Name of the field or parameter where the specific error occurred.
     *                
     */
    public function getField() : string
    {
        return $this->field;
    }
    /**
     * Setter for message
     *
     * @param string $message Readable specific error for the previously defined field.
     *                        
     *
     * @return self To use in method chains
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Getter for message
     *
     * @return string Readable specific error for the previously defined field.
     *                
     */
    public function getMessage() : string
    {
        return $this->message;
    }
}