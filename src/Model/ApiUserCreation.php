<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\MaxLength;
/**
 * Defines the API user properties for creation
 */
class ApiUserCreation extends Model
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
     * Setter for groupId
     *
     * @param string $groupId The group identifer
     *
     * @return static To use in method chains
     */
    public function setGroupId(?string $groupId)
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
     * @return static To use in method chains
     */
    public function setTimezone(?string $timezone)
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
     * @return static To use in method chains
     */
    public function setProfileIds(?array $profileIds)
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
        $serializers = array('groupId' => new PrimitiveSerializer('string'), 'name' => new PrimitiveSerializer('string'), 'timezone' => new PrimitiveSerializer('string'), 'profileIds' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('groupId' => array(new Required()), 'name' => array(new Required(), new MaxLength(100)), 'timezone' => array(new Required()), 'profileIds' => array(new Required()));
        return $rules;
    }
}