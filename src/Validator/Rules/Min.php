<?php

namespace Arimac\Sigfox\Validator\Rules;

use Arimac\Sigfox\Validator\Rule;

class Min implements Rule {

    /**
     * @var int|float
     */
    protected $min;

    /**
     * Initializing the rule
     *
     * @param int|float $number Minimum number
     */
    public function __construct($number)
    {
        $this->min = $number;
    }

    function check($value):bool {
        if(!is_numeric($value)){
            return false;
        }

        return $value>= $this->min;
    }

    function format(): string {
        return "min:".$this->min;
    }
}
