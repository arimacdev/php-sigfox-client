<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\ErrorContent\ErrorsItem;
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
     * Setter for message
     *
     * @param string $message General error message
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
     * @return string General error message
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Setter for errors
     *
     * @param ErrorsItem[] $errors List of errors that occured during request
     *
     * @return self To use in method chains
     */
    public function setErrors(?array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Getter for errors
     *
     * @return ErrorsItem[] List of errors that occured during request
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
}