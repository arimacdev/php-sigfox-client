<?php

namespace Arimac\Sigfox\Validator;

use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Validator\Rules\Required;

class Validator
{
    public static function validate(Validate $obj): void
    {
        $rules = $obj->getValidationMetaData();

        foreach ($rules as $propertyName => $rules) {
            $getterName = "get" . ucfirst($propertyName);
            $value = $obj->$getterName();
            /** @var Rule $rule **/
            $noNull = isset($rules[0]) && $rules[0] instanceof Required;
            foreach ($rules as $rule) {
                if (($noNull || isset($value)) && !$rule->check($value)) {
                    throw new ValidationException($rule->format(), $value);
                }
            }
        }
    }
}
