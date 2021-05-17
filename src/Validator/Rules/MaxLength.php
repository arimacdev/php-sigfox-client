<?php

namespace Arimac\Sigfox\Validator\Rules;

use Arimac\Sigfox\Validator\Rule;

class MaxLength implements Rule {

    protected $maxLength;

    /**
     * Initializing the rule
     *
     * @param int $length The maximum length
     */
    public function __construct(int $length)
    {
        $this->maxLength = $length;
    }

    function check($value):bool {
        if(!is_string($value)){
            return false;
        }

        return strlen($value)<= $this->maxLength;
    }

    function format(): string {
        return "max-length:".$this->maxLength;
    }
}
