<?php

namespace Arimac\Sigfox\Validator\Rules;

use Arimac\Sigfox\Validator\Rule;

class MinLength implements Rule {

    protected $minLength;

    /**
     * Initializing the rule
     *
     * @param int $length The minimum length
     */
    public function __construct(int $length)
    {
        $this->minLength = $length;
    }

    function check($value):bool {
        if(!is_string($value)){
            return false;
        }

        return strlen($value)>= $this->minLength;
    }

    function format(): string {
        return "min-length:".$this->minLength;
    }
}
