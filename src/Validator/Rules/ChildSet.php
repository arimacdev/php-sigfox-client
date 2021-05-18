<?php

namespace Arimac\Sigfox\Validator\Rules;

use Arimac\Sigfox\Validator\Rule;
use Arimac\Sigfox\Validator\Validate;
use Arimac\Sigfox\Validator\Validator;

class ChildSet implements Rule
{
    function check($value): bool
    {
        if (!is_array($value)) {
            return false;
        }

        foreach ($value as $child) {
            if (!is_object($child) || !($child instanceof Validate)) {
                return false;
            }
            Validator::validate($child);
        }
        return true;
    }

    function format(): string
    {
        return "child-set";
    }
}
