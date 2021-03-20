<?php

namespace Arimac\Sigfox\Definition;

class Paging
{
    /** @var string */
    protected string $next;
    /**
     * @param string next
     */
    function setNext(string $next)
    {
        $this->next = $next;
    }
    /**
     * @return string next
     */
    function getNext() : string
    {
        return $this->next;
    }
}