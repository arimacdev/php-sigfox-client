<?php

namespace Arimac\Sigfox\Exception;

/**
 * Request prevalidation failed
 */
class ValidationException extends SigfoxException {
    /**
     * @internal
     */
    protected string $rule;

    /**
     * @internal
     *
     * @var mixed
     */
    protected $value;

    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param string $rule  Formatted rule
     * @param mixed  $value Invalid value
     */
    public function __construct(string $rule, $value)
    {
        parent::__construct("Can not validate ".print_r($value, true)." with the $rule constraint.");
        $this->rule = $rule;
        $this->value = $value;
    }

    /**
     * Returning the rule name and parameter
     *
     * @return string Rule name and parameter list separated by a colon. And all parameters 
     * are separated by commas. Example:- `in:outdoor,indoor`
     */ 
    public function getRule(): string{
        return $this->rule;
    }

    /**
     * Returning the invalid value
     *
     * @return mixed
     */
    public function getValue() {
        return $this->value;
    }
}
