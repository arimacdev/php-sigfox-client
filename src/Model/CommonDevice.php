<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\MaxLength;
/**
 * Defines the device's common properties for reading or creation (not update)
 */
class CommonDevice extends Model
{
    /**
     * The device's identifier (hexadecimal format)
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The device's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for id
     *
     * @param string $id The device's identifier (hexadecimal format)
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The device's identifier (hexadecimal format)
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The device's name
     *
     * @return static To use in method chains
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Getter for name
     *
     * @return string The device's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('id' => array(new Required()), 'name' => array(new Required(), new MaxLength(100)));
        return $rules;
    }
}