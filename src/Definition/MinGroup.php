<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
/**
 * Defines a group entity
 */
class MinGroup extends Definition
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
     * The group identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The group name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Group's type
     * 
     * - {@see MinGroup::TYPE_SO}
     * - {@see MinGroup::TYPE_OTHER}
     * - {@see MinGroup::TYPE_SVNO}
     * - {@see MinGroup::TYPE_PARTNERS}
     * - {@see MinGroup::TYPE_NIP}
     * - {@see MinGroup::TYPE_DIST}
     * - {@see MinGroup::TYPE_CHANNEL}
     * - {@see MinGroup::TYPE_STARTER}
     * - {@see MinGroup::TYPE_PARTNER}
     *
     * @var int
     */
    protected ?int $type = null;
    /**
     * The depth level of the group in hierarchy
     *
     * @var int
     */
    protected ?int $level = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
    /**
     * @var string[]
     */
    protected ?array $resources = null;
    /**
     * @internal
     */
    protected array $validations = array('name' => array('max:100', 'min:3', 'nullable'));
    /**
     * Setter for id
     *
     * @param string $id The group identifier
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The group identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for name
     *
     * @param string $name The group name
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
     * @return string The group name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for type
     *
     * @param int $type Group's type
     *                  
     *                  - {@see MinGroup::TYPE_SO}
     *                  - {@see MinGroup::TYPE_OTHER}
     *                  - {@see MinGroup::TYPE_SVNO}
     *                  - {@see MinGroup::TYPE_PARTNERS}
     *                  - {@see MinGroup::TYPE_NIP}
     *                  - {@see MinGroup::TYPE_DIST}
     *                  - {@see MinGroup::TYPE_CHANNEL}
     *                  - {@see MinGroup::TYPE_STARTER}
     *                  - {@see MinGroup::TYPE_PARTNER}
     *                  
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
     * @return int Group's type
     *             
     *             - {@see MinGroup::TYPE_SO}
     *             - {@see MinGroup::TYPE_OTHER}
     *             - {@see MinGroup::TYPE_SVNO}
     *             - {@see MinGroup::TYPE_PARTNERS}
     *             - {@see MinGroup::TYPE_NIP}
     *             - {@see MinGroup::TYPE_DIST}
     *             - {@see MinGroup::TYPE_CHANNEL}
     *             - {@see MinGroup::TYPE_STARTER}
     *             - {@see MinGroup::TYPE_PARTNER}
     *             
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * Setter for level
     *
     * @param int $level The depth level of the group in hierarchy
     *
     * @return self To use in method chains
     */
    public function setLevel(?int $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * Getter for level
     *
     * @return int The depth level of the group in hierarchy
     */
    public function getLevel() : ?int
    {
        return $this->level;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return self To use in method chains
     */
    public function setActions(?array $actions) : self
    {
        $this->actions = $actions;
        return $this;
    }
    /**
     * Getter for actions
     *
     * @return string[]
     */
    public function getActions() : ?array
    {
        return $this->actions;
    }
    /**
     * Setter for resources
     *
     * @param string[] $resources
     *
     * @return self To use in method chains
     */
    public function setResources(?array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Getter for resources
     *
     * @return string[]
     */
    public function getResources() : ?array
    {
        return $this->resources;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('id' => new PrimitiveSerializer(self::class, 'id', 'string'), 'name' => new PrimitiveSerializer(self::class, 'name', 'string'), 'type' => new PrimitiveSerializer(self::class, 'type', 'int'), 'level' => new PrimitiveSerializer(self::class, 'level', 'int'), 'actions' => new ArraySerializer(self::class, 'actions', new PrimitiveSerializer(self::class, 'actions', 'string')), 'resources' => new ArraySerializer(self::class, 'resources', new PrimitiveSerializer(self::class, 'resources', 'string')));
    }
}