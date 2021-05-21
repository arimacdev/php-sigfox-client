<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\MaxLength;
/**
 * Defines the generic API user properties
 */
trait CommonApiUser
{
    /**
     * The API user name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The API user timezone
     *
     * @var string
     */
    protected ?string $timezone = null;
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
     * @param string $timezone The API user timezone
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
     * @return string The API user timezone
     */
    public function getTimezone() : ?string
    {
        return $this->timezone;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaDataCommonApiUser() : array
    {
        $serializers = array('name' => new PrimitiveSerializer('string'), 'timezone' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaDataCommonApiUser() : array
    {
        $rules = array('name' => array(new MaxLength(100)));
        return $rules;
    }
}