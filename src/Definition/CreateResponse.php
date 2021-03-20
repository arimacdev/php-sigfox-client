<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\BaseResponse;
/**
 * Generic information about user create operation
 */
class CreateResponse extends BaseResponse
{
    /**
     * The user's identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * @param string id The user's identifier
     */
    function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return string The user's identifier
     */
    function getId() : string
    {
        return $this->id;
    }
}