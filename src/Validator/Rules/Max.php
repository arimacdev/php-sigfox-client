<?php

namespace Arimac\Sigfox\Validator\Rules;

use Arimac\Sigfox\Validator\Rule;

class Max implements Rule {

    protected $max;

    /**
     * Initializing the rule
     *
     * @param int|float $number Maximum number
     */
    public function __construct($number)
    {
        $this->max = $number;
    }

    function check($value):bool {
        if(!is_numeric($value)){
            return false;
        }

        return $value<= $this->max;
    }

    function format(): string {
        return "max:".$this->max;
    }
}
