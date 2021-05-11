<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
    protected ?string $id = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'));
    /**
     * Setter for id
     *
     * @param string $id The user's identifier
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
     * @return string The user's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
}