<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class CommonGroupCreate extends Definition
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
     * Group's type:
     *
     * @var self::TYPE_*
     */
    protected ?int $type = null;
    /**
     * The group's timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
     *
     * @var string
     */
    protected ?string $timezone = null;
    /**
     * The parent group id
     *
     * @var string
     */
    protected ?string $parentId = null;
    /**
     * Setter for name
     *
     * @param string $name The group's name
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
     * @return string The group's name
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for description
     *
     * @param string $description The group's description
     *
     * @return self To use in method chains
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Getter for description
     *
     * @return string The group's description
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Setter for type
     *
     * @param self::TYPE_* $type Group's type:
     *
     * @return self To use in method chains
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Getter for type
     *
     * @return self::TYPE_* Group's type:
     */
    public function getType() : int
    {
        return $this->type;
    }
    /**
     * Setter for timezone
     *
     * @param string $timezone The group's timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
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
     * @return string The group's timezone (in Java TimeZone ID format, e.g."America/Costa_Rica").
     */
    public function getTimezone() : string
    {
        return $this->timezone;
    }
    /**
     * Setter for parentId
     *
     * @param string $parentId The parent group id
     *
     * @return self To use in method chains
     */
    public function setParentId(?string $parentId) : self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * Getter for parentId
     *
     * @return string The parent group id
     */
    public function getParentId() : string
    {
        return $this->parentId;
    }
}