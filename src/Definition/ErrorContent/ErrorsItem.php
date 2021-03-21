<?php

namespace Arimac\Sigfox\Definition\ErrorContent;

use Arimac\Sigfox\Definition;
class ErrorsItem extends Definition
{
    /**
     * Describe where the problem occurred. Can be from body, query or path.
     *
     * @var string
     */
    protected ?string $type = null;
    /**
     * Name of the field or parameter where the specific error occurred.
     *
     * @var string
     */
    protected ?string $field = null;
    /**
     * Readable specific error for the previously defined field.
     *
     * @var string
     */
    protected ?string $message = null;
    /**
     * @param string $type Describe where the problem occurred. Can be from body, query or path.
     */
    function setType(?string $type)
    {
        $this->type = $type;
    }
    /**
     * @return string Describe where the problem occurred. Can be from body, query or path.
     */
    function getType() : ?string
    {
        return $this->type;
    }
    /**
     * @param string $field Name of the field or parameter where the specific error occurred.
     */
    function setField(?string $field)
    {
        $this->field = $field;
    }
    /**
     * @return string Name of the field or parameter where the specific error occurred.
     */
    function getField() : ?string
    {
        return $this->field;
    }
    /**
     * @param string $message Readable specific error for the previously defined field.
     */
    function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string Readable specific error for the previously defined field.
     */
    function getMessage() : ?string
    {
        return $this->message;
    }
}