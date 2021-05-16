<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class BaseHost extends Definition
{
    /**
     * The host's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for name
     *
     * @param string $name The host's name
     *
     * @return self To use in method chains
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The host's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('name' => new PrimitiveSerializer(self::class, 'name', 'string'));
    }
}