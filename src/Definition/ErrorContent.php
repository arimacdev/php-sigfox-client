<?php

namespace Arimac\Sigfox\Definition;

/**
 * Content of error messages, and sub-errors messages if any
 */
class ErrorContent
{
    /**
     * General error message
     */
    protected string $message;
    /**
     * List of errors that occured during request
     */
    protected array $errors;
}