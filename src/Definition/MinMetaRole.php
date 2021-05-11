<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines a meta role entity
 */
class MinMetaRole extends Definition
{
    /**
     * The meta role's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The meta role's name
     *
     * @var string
     */
    protected ?string $name = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'), new PrimitiveSerializer(self::class, 'name', 'string'));
    protected $validations = array('name' => array('max:100', 'nullable'));
    /**
     * Setter for id
     *
     * @param string $id The meta role's identifier
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
     * @return string The meta role's identifier
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The meta role's name
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
     * @return string The meta role's name
     */
    public function getName() : string
    {
        return $this->name;
    }
}