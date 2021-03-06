<?php

namespace Arimac\Sigfox\Model\AvailableEntitiesResponse;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
class ClassesItem extends Model
{
    /**
     * The Id of the device class.
     *
     * @var int
     */
    protected ?int $id = null;
    /**
     * The name of the device class.
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The mean attenuation associated for calculation (in dB).
     *
     * @var int[]
     */
    protected ?array $attenuation = null;
    /**
     * Setter for id
     *
     * @param int $id The Id of the device class.
     *
     * @return static To use in method chains
     */
    public function setId(?int $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return int The Id of the device class.
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The name of the device class.
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
     * @return string The name of the device class.
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for attenuation
     *
     * @param int[] $attenuation The mean attenuation associated for calculation (in dB).
     *
     * @return static To use in method chains
     */
    public function setAttenuation(?array $attenuation)
    {
        $this->attenuation = $attenuation;
        return $this;
    }
    /**
     * Getter for attenuation
     *
     * @return int[] The mean attenuation associated for calculation (in dB).
     */
    public function getAttenuation() : ?array
    {
        return $this->attenuation;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('id' => new PrimitiveSerializer('int'), 'name' => new PrimitiveSerializer('string'), 'attenuation' => new ArraySerializer(new PrimitiveSerializer('int')));
        return $serializers;
    }
}