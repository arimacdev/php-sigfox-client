<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class Paging extends Definition
{
    /** @var string */
    protected ?string $next = null;
    /**
     * @param string next
     */
    function setNext(?string $next)
    {
        $this->next = $next;
    }
    /**
     * @return string next
     */
    function getNext() : ?string
    {
        return $this->next;
    }
}