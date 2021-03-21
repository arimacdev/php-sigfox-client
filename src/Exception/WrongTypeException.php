<?php

namespace Arimac\Sigfox\Exception;

use Exception;

class WrongTypeException extends Exception
{
    protected string $property;

    public function __construct(string $property)
    {
        $this->property = $property;
        parent::__construct("Wrong type supplied for the $property.");
    }

    public function getProperty(): string
    {
        return $this->property;
    }
}
