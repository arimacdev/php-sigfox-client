<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * minimal information about Hardware Family.
 */
class MinHwFamily extends Definition
{
    /**
     * STANDARD
     */
    public const ID_STANDARD = 0;
    /**
     * MINI
     */
    public const ID_MINI = 1;
    /**
     * ACCESS STATION MINI
     */
    public const ID_ACCESS_STATION_MINI = 2;
    /**
     * ACCESS STATION MICRO
     */
    public const ID_ACCESS_STATION_MICRO = 3;
    /**
     * Base station hardware family id.
     * 
     * - {@see MinHwFamily::ID_STANDARD}
     * - {@see MinHwFamily::ID_MINI}
     * - {@see MinHwFamily::ID_ACCESS_STATION_MINI}
     * - {@see MinHwFamily::ID_ACCESS_STATION_MICRO}
     *
     * @var int
     */
    protected ?int $id = null;
    /**
     * The hardware family's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for id
     *
     * @param int $id Base station hardware family id.
     *                
     *                - {@see MinHwFamily::ID_STANDARD}
     *                - {@see MinHwFamily::ID_MINI}
     *                - {@see MinHwFamily::ID_ACCESS_STATION_MINI}
     *                - {@see MinHwFamily::ID_ACCESS_STATION_MICRO}
     *                
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
     * @return int Base station hardware family id.
     *             
     *             - {@see MinHwFamily::ID_STANDARD}
     *             - {@see MinHwFamily::ID_MINI}
     *             - {@see MinHwFamily::ID_ACCESS_STATION_MINI}
     *             - {@see MinHwFamily::ID_ACCESS_STATION_MICRO}
     *             
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The hardware family's name
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
     * @return string The hardware family's name
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
        return array('id' => new PrimitiveSerializer('int'), 'name' => new PrimitiveSerializer('string'));
    }
}