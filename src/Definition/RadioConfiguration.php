<?php

namespace Arimac\Sigfox\Definition;

/**
 * Defines the properties of certificate radio configurations
 */
class RadioConfiguration
{
    /** RC1 */
    public const ID_RC1 = 0;
    /** RC2 */
    public const ID_RC2 = 1;
    /** RC3 */
    public const ID_RC3 = 2;
    /** RC101 */
    public const ID_RC101 = 3;
    /** RC4 */
    public const ID_RC4 = 4;
    /** RC5 */
    public const ID_RC5 = 5;
    /** RC6 */
    public const ID_RC6 = 6;
    /** RC7 */
    public const ID_RC7 = 7;
    /**
     * The radio configuration identifier
     * - `RadioConfiguration::ID_RC1`
     * - `RadioConfiguration::ID_RC2`
     * - `RadioConfiguration::ID_RC3`
     * - `RadioConfiguration::ID_RC101`
     * - `RadioConfiguration::ID_RC4`
     * - `RadioConfiguration::ID_RC5`
     * - `RadioConfiguration::ID_RC6`
     * - `RadioConfiguration::ID_RC7`
     *
     * @var int
     */
    protected int $id;
    /**
     * @param int id The radio configuration identifier
     * - `RadioConfiguration::ID_RC1`
     * - `RadioConfiguration::ID_RC2`
     * - `RadioConfiguration::ID_RC3`
     * - `RadioConfiguration::ID_RC101`
     * - `RadioConfiguration::ID_RC4`
     * - `RadioConfiguration::ID_RC5`
     * - `RadioConfiguration::ID_RC6`
     * - `RadioConfiguration::ID_RC7`
     */
    function setId(int $id)
    {
        $this->id = $id;
    }
    /**
     * @return int The radio configuration identifier
     * - `RadioConfiguration::ID_RC1`
     * - `RadioConfiguration::ID_RC2`
     * - `RadioConfiguration::ID_RC3`
     * - `RadioConfiguration::ID_RC101`
     * - `RadioConfiguration::ID_RC4`
     * - `RadioConfiguration::ID_RC5`
     * - `RadioConfiguration::ID_RC6`
     * - `RadioConfiguration::ID_RC7`
     */
    function getId() : int
    {
        return $this->id;
    }
}