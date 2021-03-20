<?php

namespace Arimac\Sigfox\Definition;

/**
 * Content of error messages, and sub-errors messages if any
 */
class ErrorContent
{
    /**
     * General error message
     *
     * @var string
     */
    protected string $message;
    /**
     * List of errors that occured during request
     *
     * @var array
     */
    protected array $errors;
    /**
     * @param string message General error message
     */
    function setMessage(string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string General error message
     */
    function getMessage() : string
    {
        return $this->message;
    }
    /**
     * @param array errors List of errors that occured during request
     */
    function setErrors(array $errors)
    {
        $this->errors = $errors;
    }
    /**
     * @return array List of errors that occured during request
     */
    function getErrors() : array
    {
        return $this->errors;
    }
}