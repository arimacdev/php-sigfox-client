<?php

namespace Arimac\Sigfox\Validator;

interface Validate {
    /**
     * Returning all validation rules as an associated array
     *
     * @return Rule[][] Property name as the key and Rule[] as the value
     */
    function getValidationMetaData(): array;    
}
