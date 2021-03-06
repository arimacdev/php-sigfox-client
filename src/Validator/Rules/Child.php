<?php

namespace Arimac\Sigfox\Validator\Rules;

use Arimac\Sigfox\Validator\Rule;
use Arimac\Sigfox\Validator\Validate;
use Arimac\Sigfox\Validator\Validator;

class Child implements Rule {
    function check($value):bool {
        if(!is_object($value)||!($value instanceof Validate)){
            return false;
        }
        Validator::validate($value);
        return true;
    }

    function format(): string {
        return "child";
    }
}
