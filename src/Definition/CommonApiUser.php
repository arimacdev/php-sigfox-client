<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Defines the generic API user properties
 */
class CommonApiUser extends Definition
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
     * @internal
     */
    protected array $validations = array('name' => array('max:100', 'nullable'));
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
    public function getSerializeMetaData() : array
    {
        return array('name' => new PrimitiveSerializer(self::class, 'name', 'string'), 'timezone' => new PrimitiveSerializer(self::class, 'timezone', 'string'));
    }
}