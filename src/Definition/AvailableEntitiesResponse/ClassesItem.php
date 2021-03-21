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
     * @param int $id The Id of the device class.
     */
    function setId(?int $id)
    {
        $this->id = $id;
    }
    /**
     * @return int The Id of the device class.
     */
    function getId() : ?int
    {
        return $this->id;
    }
    /**
     * @param string $name The name of the device class.
     */
    function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string The name of the device class.
     */
    function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param int[] $attenuation The mean attenuation associated for calculation (in dB).
     */
    function setAttenuation(?array $attenuation)
    {
        $this->attenuation = $attenuation;
    }
    /**
     * @return int[] The mean attenuation associated for calculation (in dB).
     */
    function getAttenuation() : ?array
    {
        return $this->attenuation;
    }
}