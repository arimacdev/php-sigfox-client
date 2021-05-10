<?php

namespace Arimac\Sigfox\Definition\AvailableEntitiesResponse;

use Arimac\Sigfox\Definition;
class ClassesItem extends Definition
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
     * @return self To use in method chains
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return int The Id of the device class.
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The name of the device class.
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
     * @return string The name of the device class.
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for attenuation
     *
     * @param int[] $attenuation The mean attenuation associated for calculation (in dB).
     *
     * @return self To use in method chains
     */
    public function setAttenuation(?array $attenuation) : self
    {
        $this->attenuation = $attenuation;
        return $this;
    }
    /**
     * Getter for attenuation
     *
     * @return int[] The mean attenuation associated for calculation (in dB).
     */
    public function getAttenuation() : array
    {
        return $this->attenuation;
    }
}