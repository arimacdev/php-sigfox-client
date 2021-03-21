<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Contract's id
 */
class ContractId extends Definition
{
    protected $required = array('id');
    /**
     * The contract's id
     *
     * @var string
     */
    protected string $id;
    /**
     * @param string $id The contract's id
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The contract's id
     */
    function getId() : string
    {
        return $this->id;
    }
}