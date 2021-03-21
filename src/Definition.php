<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Exception\MissingRequiredPropertyException;
use Arimac\Sigfox\Exception\WrongTypeException;

class Definition
{
    protected $required = [];

    protected $objects = [];

    public function __serialize(): array
    {
        $vars = get_object_vars($this);
        $data = [];
        foreach ($vars as $key => $default) {
            if ($key !== "required") {
                if (isset($default)) {
                    $val = $default;
                    if (in_array($key, $this->objects)) {
                        $val = $default->__serialize();
                    }
                    $data[$key] = $val;
                } else if (in_array($key, $this->required)) {
                    throw new MissingRequiredPropertyException(get_class($this), $this->required, $key);
                }
            }
        }
        return $data;
    }

    public function __unserialize(array $data): void
    {
        $vars = get_object_vars($this);
        foreach ($vars as $key => $default) {
            if ($key !== "required") {
                if (isset($data[$key])) {
                    $val = $data[$key];
                    if (in_array($key, array_keys($this->objects))) {
                        if (is_array($val)) {
                            $val = $this->objects[$key]::fromArray($val);
                        } else if (!($val instanceof $this->objects[$key])) {
                            throw new WrongTypeException($key);
                        }
                    }
                    try {
                        $this->$key = $val;
                    } catch (\Exception $e) {
                        throw new WrongTypeException($key);
                    }
                }
                if (isset($default)) {
                    $this->key = $default;
                } else if (in_array($key, $this->required)) {
                    throw new MissingRequiredPropertyException(get_class($this), $this->required, $key);
                }
            }
        }
    }

    public static function fromArray(array $data): self
    {
        $obj = new static();
        $obj->__unserialize($data);
        return $obj;
    }
}
