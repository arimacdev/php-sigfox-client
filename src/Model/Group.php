<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Validator\Rules\MaxLength;
use Arimac\Sigfox\Validator\Rules\MinLength;
use Arimac\Sigfox\Validator\Rules\ChildSet;
/**
 * Defines the group's generic properties
 */
class Group extends Model
{
    /**
     * SO
     */
    public const TYPE_SO = 0;
    /**
     * Basic
     */
    public const TYPE_BASIC = 2;
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
     * Group's type
     * 
     * - {@see Group::TYPE_SO}
     * - {@see Group::TYPE_BASIC}
     * - {@see Group::TYPE_SVNO}
     * - {@see Group::TYPE_PARTNERS}
     * - {@see Group::TYPE_NIP}
     * - {@see Group::TYPE_DIST}
     * - {@see Group::TYPE_CHANNEL}
     * - {@see Group::TYPE_STARTER}
     * - {@see Group::TYPE_PARTNER}
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
     * The group's identifier
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The group's name to ascii and lowercase
     *
     * @var string
     */
    protected ?string $nameCI = null;
    /**
     * The group's path sorted by descending ancestor {id} (direct parent to farthest parent), restricted to the
     * groups visible by the API user
     *
     * @var MinGroup[]
     */
    protected ?array $path = null;
    /**
     * The user id of the group's creator
     *
     * @var string
     */
    protected ?string $createdBy = null;
    /**
     * The creation date of the group (timestamp in milliseconds since Unix Epoch)
     *
     * @var int
     */
    protected ?int $creationTime = null;
    /**
     * true if the group is leaf
     *
     * @var bool
     */
    protected ?bool $leaf = null;
    /**
     * @var string[]
     */
    protected ?array $actions = null;
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
     * @param int $type Group's type
     *                  
     *                  - {@see Group::TYPE_SO}
     *                  - {@see Group::TYPE_BASIC}
     *                  - {@see Group::TYPE_SVNO}
     *                  - {@see Group::TYPE_PARTNERS}
     *                  - {@see Group::TYPE_NIP}
     *                  - {@see Group::TYPE_DIST}
     *                  - {@see Group::TYPE_CHANNEL}
     *                  - {@see Group::TYPE_STARTER}
     *                  - {@see Group::TYPE_PARTNER}
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
     * @return int Group's type
     *             
     *             - {@see Group::TYPE_SO}
     *             - {@see Group::TYPE_BASIC}
     *             - {@see Group::TYPE_SVNO}
     *             - {@see Group::TYPE_PARTNERS}
     *             - {@see Group::TYPE_NIP}
     *             - {@see Group::TYPE_DIST}
     *             - {@see Group::TYPE_CHANNEL}
     *             - {@see Group::TYPE_STARTER}
     *             - {@see Group::TYPE_PARTNER}
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
     * Setter for id
     *
     * @param string $id The group's identifier
     *
     * @return static To use in method chains
     */
    public function setId(?string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The group's identifier
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Setter for nameCI
     *
     * @param string $nameCI The group's name to ascii and lowercase
     *
     * @return static To use in method chains
     */
    public function setNameCI(?string $nameCI)
    {
        $this->nameCI = $nameCI;
        return $this;
    }
    /**
     * Getter for nameCI
     *
     * @return string The group's name to ascii and lowercase
     */
    public function getNameCI() : ?string
    {
        return $this->nameCI;
    }
    /**
     * Setter for path
     *
     * @param MinGroup[] $path The group's path sorted by descending ancestor {id} (direct parent to farthest
     *                         parent), restricted to the groups visible by the API user
     *
     * @return static To use in method chains
     */
    public function setPath(?array $path)
    {
        $this->path = $path;
        return $this;
    }
    /**
     * Getter for path
     *
     * @return MinGroup[] The group's path sorted by descending ancestor {id} (direct parent to farthest parent),
     *                    restricted to the groups visible by the API user
     */
    public function getPath() : ?array
    {
        return $this->path;
    }
    /**
     * Setter for createdBy
     *
     * @param string $createdBy The user id of the group's creator
     *
     * @return static To use in method chains
     */
    public function setCreatedBy(?string $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Getter for createdBy
     *
     * @return string The user id of the group's creator
     */
    public function getCreatedBy() : ?string
    {
        return $this->createdBy;
    }
    /**
     * Setter for creationTime
     *
     * @param int $creationTime The creation date of the group (timestamp in milliseconds since Unix Epoch)
     *
     * @return static To use in method chains
     */
    public function setCreationTime(?int $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }
    /**
     * Getter for creationTime
     *
     * @return int The creation date of the group (timestamp in milliseconds since Unix Epoch)
     */
    public function getCreationTime() : ?int
    {
        return $this->creationTime;
    }
    /**
     * Setter for leaf
     *
     * @param bool $leaf true if the group is leaf
     *
     * @return static To use in method chains
     */
    public function setLeaf(?bool $leaf)
    {
        $this->leaf = $leaf;
        return $this;
    }
    /**
     * Getter for leaf
     *
     * @return bool true if the group is leaf
     */
    public function getLeaf() : ?bool
    {
        return $this->leaf;
    }
    /**
     * Setter for actions
     *
     * @param string[] $actions
     *
     * @return static To use in method chains
     */
    public function setActions(?array $actions)
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
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('name' => new PrimitiveSerializer('string'), 'description' => new PrimitiveSerializer('string'), 'type' => new PrimitiveSerializer('int'), 'timezone' => new PrimitiveSerializer('string'), 'id' => new PrimitiveSerializer('string'), 'nameCI' => new PrimitiveSerializer('string'), 'path' => new ArraySerializer(new ClassSerializer(MinGroup::class)), 'createdBy' => new PrimitiveSerializer('string'), 'creationTime' => new PrimitiveSerializer('int'), 'leaf' => new PrimitiveSerializer('bool'), 'actions' => new ArraySerializer(new PrimitiveSerializer('string')));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('name' => array(new MaxLength(100), new MinLength(3)), 'description' => array(new MaxLength(300)), 'path' => array(new ChildSet()));
        return $rules;
    }
}