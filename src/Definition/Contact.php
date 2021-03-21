<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseContact;
class Contact extends BaseContact
{
    /**
     * The contact's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * @param string $id The contact's identifier
     */
    function setId(?string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The contact's identifier
     */
    function getId() : ?string
    {
        return $this->id;
    }
}