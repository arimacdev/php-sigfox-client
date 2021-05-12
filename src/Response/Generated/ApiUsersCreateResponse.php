<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class ApiUsersCreateResponse extends Definition
{
    /**
     * The newly created API user identifier
     *
     * @var string
     */
    protected ?string $id = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'));
    /**
     * Setter for id
     *
     * @param string $id The newly created API user identifier
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
     * @return string The newly created API user identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
}