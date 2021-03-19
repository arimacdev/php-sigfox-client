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
}