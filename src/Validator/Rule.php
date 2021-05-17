<?php

namespace Arimac\Sigfox\Validator;

interface Rule {
    /**
     * Checking the value with the given rule
     *
     * @param mixed $value The value to validate
     *
     * @return bool Validated or not
     */
    public function check($value): bool;

    /**
     * Get a string representation of the rule and parameters
     *
     * @return string Rule name and the parameter list shoud be spearated 
     * by a colon and  parameter list should be separated by commas.
     * Example:- in:outdoor,indoor
     */
    public function format(): string;
}
