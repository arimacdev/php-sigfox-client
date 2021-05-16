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
     * - {@see RadioConfiguration::ID_RC1}
     * - {@see RadioConfiguration::ID_RC2}
     * - {@see RadioConfiguration::ID_RC3}
     * - {@see RadioConfiguration::ID_RC101}
     * - {@see RadioConfiguration::ID_RC4}
     * - {@see RadioConfiguration::ID_RC5}
     * - {@see RadioConfiguration::ID_RC6}
     * - {@see RadioConfiguration::ID_RC7}
     *
     * @var int
     */
    protected ?int $id = null;
    /**
     * @internal
     */
    protected array $validations = array('id' => array('required'));
    /**
     * Setter for id
     *
     * @param int $id The radio configuration identifier
     *                
     *                - {@see RadioConfiguration::ID_RC1}
     *                - {@see RadioConfiguration::ID_RC2}
     *                - {@see RadioConfiguration::ID_RC3}
     *                - {@see RadioConfiguration::ID_RC101}
     *                - {@see RadioConfiguration::ID_RC4}
     *                - {@see RadioConfiguration::ID_RC5}
     *                - {@see RadioConfiguration::ID_RC6}
     *                - {@see RadioConfiguration::ID_RC7}
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
     * @return int The radio configuration identifier
     *             
     *             - {@see RadioConfiguration::ID_RC1}
     *             - {@see RadioConfiguration::ID_RC2}
     *             - {@see RadioConfiguration::ID_RC3}
     *             - {@see RadioConfiguration::ID_RC101}
     *             - {@see RadioConfiguration::ID_RC4}
     *             - {@see RadioConfiguration::ID_RC5}
     *             - {@see RadioConfiguration::ID_RC6}
     *             - {@see RadioConfiguration::ID_RC7}
     *             
     */
    public function getId() : ?int
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
        return array('id' => new PrimitiveSerializer(self::class, 'id', 'int'));
    }
}