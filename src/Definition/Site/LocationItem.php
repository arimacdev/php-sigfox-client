<?php

namespace Arimac\Sigfox\Definition\Site;

use Arimac\Sigfox\Definition;
class LocationItem extends Definition
{
    /**
     * location code
     *
     * @var int
     */
    protected ?int $code = null;
    /**
     * location name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * @param int $code location code
     */
    function setCode(?int $code)
    {
        $this->code = $code;
    }
    /**
     * @return int location code
     */
    function getCode() : ?int
    {
        return $this->code;
    }
    /**
     * @param string $name location name
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string location name
     */
    function getName() : ?string
    {
        return $this->name;
    }
}