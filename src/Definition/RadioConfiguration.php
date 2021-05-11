<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the properties of certificate radio configurations
 */
class RadioConfiguration extends Definition
{
    /**
     * RC1
     */
    public const ID_RC1 = 0;
    /**
     * RC2
     */
    public const ID_RC2 = 1;
    /**
     * RC3
     */
    public const ID_RC3 = 2;
    /**
     * RC101
     */
    public const ID_RC101 = 3;
    /**
     * RC4
     */
    public const ID_RC4 = 4;
    /**
     * RC5
     */
    public const ID_RC5 = 5;
    /**
     * RC6
     */
    public const ID_RC6 = 6;
    /**
     * RC7
     */
    public const ID_RC7 = 7;
    /**
     * The radio configuration identifier
     *
     * @var self::ID_*
     */
    protected ?int $id = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'int'));
    protected $validations = array('id' => array('required'));
    /**
     * Setter for id
     *
     * @param self::ID_* $id The radio configuration identifier
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
     * @return self::ID_* The radio configuration identifier
     */
    public function getId() : int
    {
        return $this->id;
    }
}