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
    /**
     * Setter for id
     *
     * @internal
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
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer('string'));
    }
}