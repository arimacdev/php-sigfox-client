<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class Contact extends BaseContact
{
    /**
     * The contact's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * Setter for id
     *
     * @param string $id The contact's identifier
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The contact's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
}