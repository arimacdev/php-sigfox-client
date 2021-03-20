<?php

namespace Arimac\Sigfox\Definition;

/**
 * Code and name of a permission
 */
class MinPerm
{
    /**
     * The permission's code
     *
     * @var int
     */
    protected int $code;
    /**
     * The permission's name
     *
     * @var string
     */
    protected string $name;
    /**
     * @param int code The permission's code
     */
    function setCode(int $code)
    {
        $this->code = $code;
    }
    /**
     * @return int The permission's code
     */
    function getCode() : int
    {
        return $this->code;
    }
    /**
     * @param string name The permission's name
     */
    function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The permission's name
     */
    function getName() : string
    {
        return $this->name;
    }
}