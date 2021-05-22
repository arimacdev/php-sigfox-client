<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\MaxLength;
use Arimac\Sigfox\Validator\Rules\MinLength;
/**
 * Generic information for group update
 */
class CommonGroupUpdate extends Model
{
    /**
     * SO
     */
    public const TYPE_SO = 0;
    /**
     * Other
     */
    public const TYPE_OTHER = 2;
    /**
     * SVNO
     */
    public const TYPE_SVNO = 5;
    /**
     * Partners
     */
    public const TYPE_PARTNERS = 6;
    /**
     * NIP
     */
    public const TYPE_NIP = 7;
    /**
     * DIST
     */
    public const TYPE_DIST = 8;
    /**
     * Channel
     */
    public const TYPE_CHANNEL = 9;
    /**
     * Starter
     */
    public const TYPE_STARTER = 10;
    /**
     * Partner
     */
    public const TYPE_PARTNER = 11;
    /**
     * The group's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * The group's description
     *
     * @var string
     */
    protected ?string $description = null;
    /**
     * - Group's type
     * 
     * - {@see CommonGroupUpdate::TYPE_SO}
     * - {@see CommonGroupUpdate::TYPE_OTHER}
     * - {@see CommonGroupUpdate::TYPE_SVNO}
     * - {@see CommonGroupUpdate::TYPE_PARTNERS}
     * - {@see CommonGroupUpdate::TYPE_NIP}
     * - {@see CommonGroupUpdate::TYPE_DIST}
     * - {@see CommonGroupUpdate::TYPE_CHANNEL}
     * - {@see CommonGroupUpdate::TYPE_STARTER}
     * - {@see CommonGroupUpdate::TYPE_PARTNER}
     *
     * @var int
     */
    protected ?int $type = null;
    /**
     * The timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
     *
     * @var string
     */
    protected ?string $timezone = null;
    /**
     * Setter for name
     *
     * @param string $name The group's name
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
     * @return string The group's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for description
     *
     * @param string $description The group's description
     *
     * @return static To use in method chains
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string The group's description
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Setter for type
     *
     * @param int $type - Group's type
     *                  
     *                  - {@see CommonGroupUpdate::TYPE_SO}
     *                  - {@see CommonGroupUpdate::TYPE_OTHER}
     *                  - {@see CommonGroupUpdate::TYPE_SVNO}
     *                  - {@see CommonGroupUpdate::TYPE_PARTNERS}
     *                  - {@see CommonGroupUpdate::TYPE_NIP}
     *                  - {@see CommonGroupUpdate::TYPE_DIST}
     *                  - {@see CommonGroupUpdate::TYPE_CHANNEL}
     *                  - {@see CommonGroupUpdate::TYPE_STARTER}
     *                  - {@see CommonGroupUpdate::TYPE_PARTNER}
     *                  
     *
     * @return static To use in method chains
     */
    public function setType(?int $type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Getter for type
     *
     * @return int - Group's type
     *             
     *             - {@see CommonGroupUpdate::TYPE_SO}
     *             - {@see CommonGroupUpdate::TYPE_OTHER}
     *             - {@see CommonGroupUpdate::TYPE_SVNO}
     *             - {@see CommonGroupUpdate::TYPE_PARTNERS}
     *             - {@see CommonGroupUpdate::TYPE_NIP}
     *             - {@see CommonGroupUpdate::TYPE_DIST}
     *             - {@see CommonGroupUpdate::TYPE_CHANNEL}
     *             - {@see CommonGroupUpdate::TYPE_STARTER}
     *             - {@see CommonGroupUpdate::TYPE_PARTNER}
     *             
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * Setter for timezone
     *
     * @param string $timezone The timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
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
     * @return string The timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
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
        $serializers = array('name' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'), 'type' => new PrimitiveSerializer('int'), 'timezone' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('name' => array(new MaxLength(100), new MinLength(3)), 'description' => array(new MaxLength(300)));
        return $rules;
    }
}