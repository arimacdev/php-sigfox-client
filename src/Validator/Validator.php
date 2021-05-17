<?php

namespace Arimac\Sigfox\Validator;

use Arimac\Sigfox\Exception\ValidationException;

class Validator {
    public static function validate(Validate $obj): void{
        $rules = $obj->getValidationRules();

        foreach($rules as $propertyName=> $rules){
            $getterName = "get".ucfirst($propertyName);
            $value = $obj->$getterName();
            /** @var Rule $rule **/
            foreach($rules as $key=> $rule){
                if(!$rule->check($value)&&($key===0|| isset($value))){
                    throw new ValidationException($rule->format(), $value);
                }
            }
        }
    }
}
