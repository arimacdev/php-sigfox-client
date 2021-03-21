<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\ErrorContent\ErrorsItem;
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
     * @var ErrorsItem[]
     */
    protected ?array $errors = null;
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
     * @param ErrorsItem[] $errors List of errors that occured during request
     */
    function setErrors(?array $errors)
    {
        $this->errors = $errors;
    }
    /**
     * @return ErrorsItem[] List of errors that occured during request
     */
    function getErrors() : ?array
    {
        return $this->errors;
    }
}