<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class Paging extends Definition
{
    /**
     * @var string
     */
    protected ?string $next = null;
    /**
     * Setter for next
     *
     * @param string $next
     *
     * @return self To use in method chains
     */
    public function setNext(?string $next) : self
    {
        $this->next = $next;
        return $this;
    }
    /**
     * Getter for next
     *
     * @return string
     */
    public function getNext() : string
    {
        return $this->next;
    }
}