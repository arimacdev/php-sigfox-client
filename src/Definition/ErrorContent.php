<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\ErrorContent\ErrorsItemItem;
use Arimac\Sigfox\Definition;
/**
 * Content of error messages, and sub-errors messages if any
 */
class ErrorContent extends Definition
{
    /**
     * General error message
     *
     * @var string
     */
    protected ?string $message = null;
    /**
     * List of errors that occured during request
     *
     * @var ErrorContent\ErrorsItemItem
     */
    protected ?ErrorContent\ErrorsItemItem $errors = null;
    /**
     * @param string $message General error message
     */
    function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string General error message
     */
    function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * @param ErrorContent\ErrorsItemItem $errors List of errors that occured during request
     */
    function setErrors(?ErrorContent\ErrorsItemItem $errors)
    {
        $this->errors = $errors;
    }
    /**
     * @return ErrorContent\ErrorsItemItem List of errors that occured during request
     */
    function getErrors() : ?ErrorContent\ErrorsItemItem
    {
        return $this->errors;
    }
}