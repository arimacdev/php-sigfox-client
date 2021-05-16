<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Contract's id
 */
class ContractId extends Definition
{
    /**
     * The contract's id
     *
     * @var string
     */
    protected ?string $id = null;
    protected array $validations = array('id' => array('required'));
    /**
     * Setter for id
     *
     * @param string $id The contract's id
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
     * @return string The contract's id
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer(self::class, 'id', 'string'));
    }
}