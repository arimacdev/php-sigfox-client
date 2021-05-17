<?php

namespace Arimac\Sigfox\Validator\Rules;

use Arimac\Sigfox\Validator\Rule;

class OneOf implements Rule {
    protected array $list;

    /**
     * Initializing the rule
     *
     * @param array $list List of items
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    function check($value):bool {
        return in_array($value, $this->list);
    }

    function format(): string {
        return "one-of:".implode(",",str_replace(",","\\,",$this->list));
    }
}
