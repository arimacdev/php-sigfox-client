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
}