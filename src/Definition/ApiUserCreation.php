<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Defines the API user properties for creation
 */
class ApiUserCreation extends Definition
{
    /**
     * The group identifer
     *
     * @var string
     */
    protected ?string $groupId = null;
    /**
     * The API user name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The API user timezone as a Java TimeZone ID ("full name" version only, like "America/Costa_Rica")
     *
     * @var string
     */
    protected ?string $timezone = null;
    /**
     * The API user profiles
     *
     * @var string[]
     */
    protected ?array $profileIds = null;
    /**
     * @internal
     */
    protected array $validations = array('groupId' => array('required'), 'name' => array('required', 'max:100'), 'timezone' => array('required'), 'profileIds' => array('required'));
    /**
     * Setter for groupId
     *
     * @param string $groupId The group identifer
     *
     * @return self To use in method chains
     */
    public function setGroupId(?string $groupId) : self
    {
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Getter for groupId
     *
     * @return string The group identifer
     */
    public function getGroupId() : ?string
    {
        return $this->groupId;
    }
    /**
     * Setter for name
     *
     * @param string $name The API user name
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
     * @return string The API user name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for timezone
     *
     * @param string $timezone The API user timezone as a Java TimeZone ID ("full name" version only, like
     *                         "America/Costa_Rica")
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
     * @return string The API user timezone as a Java TimeZone ID ("full name" version only, like
     *                "America/Costa_Rica")
     */
    public function getTimezone() : ?string
    {
        return $this->timezone;
    }
    /**
     * Setter for profileIds
     *
     * @param string[] $profileIds The API user profiles
     *
     * @return self To use in method chains
     */
    public function setProfileIds(?array $profileIds) : self
    {
        $this->profileIds = $profileIds;
        return $this;
    }
    /**
     * Getter for profileIds
     *
     * @return string[] The API user profiles
     */
    public function getProfileIds() : ?array
    {
        return $this->profileIds;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('groupId' => new PrimitiveSerializer(self::class, 'groupId', 'string'), 'name' => new PrimitiveSerializer(self::class, 'name', 'string'), 'timezone' => new PrimitiveSerializer(self::class, 'timezone', 'string'), 'profileIds' => new ArraySerializer(self::class, 'profileIds', new PrimitiveSerializer(self::class, 'profileIds', 'string')));
    }
}