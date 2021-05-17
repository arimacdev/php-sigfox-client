<?php

namespace Arimac\Sigfox\Validator\Rules;

use Arimac\Sigfox\Validator\Rule;

class Required implements Rule {
    function check($value):bool {
        return isset($value);
    }

    function format(): string {
        return "required";
    }
}
