<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Generic information about a User
 */
class CommonUser extends Definition
{
    /**
     * The user's first name
     *
     * @var string
     */
    protected ?string $firstName = null;
    /**
     * The user's last name
     *
     * @var string
     */
    protected ?string $lastName = null;
    /**
     * The user's timezone
     *
     * @var string
     */
    protected ?string $timezone = null;
    protected array $validations = array('firstName' => array('max:100', 'nullable'), 'lastName' => array('max:100', 'nullable'));
    /**
     * Setter for firstName
     *
     * @param string $firstName The user's first name
     *
     * @return self To use in method chains
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Getter for firstName
     *
     * @return string The user's first name
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * Setter for lastName
     *
     * @param string $lastName The user's last name
     *
     * @return self To use in method chains
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Getter for lastName
     *
     * @return string The user's last name
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * Setter for timezone
     *
     * @param string $timezone The user's timezone
     *
     * @return self To use in method chains
     */
    public function setTimezone(?string $timezone) : self
    {
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Getter for timezone
     *
     * @return string The user's timezone
     */
    public function getTimezone() : ?string
    {
        return $this->timezone;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('firstName' => new PrimitiveSerializer(self::class, 'firstName', 'string'), 'lastName' => new PrimitiveSerializer(self::class, 'lastName', 'string'), 'timezone' => new PrimitiveSerializer(self::class, 'timezone', 'string'));
    }
}