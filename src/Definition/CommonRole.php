<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * generic information about a Role
 */
class CommonRole extends Definition
{
    /**
     * ROLE
     */
    public const TYPE_ROLE = 0;
    /**
     * META_EMPTY
     */
    public const TYPE_META_EMPTY = 1;
    /**
     * META
     */
    public const TYPE_META = 2;
    /**
     * the role's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Token's type of role
     * 
     * - {@see CommonRole::TYPE_ROLE}
     * - {@see CommonRole::TYPE_META_EMPTY}
     * - {@see CommonRole::TYPE_META}
     *
     * @var int
     */
    protected ?int $type = null;
    /**
     * @internal
     */
    protected array $validations = array('name' => array('max:100', 'nullable'));
    /**
     * Setter for name
     *
     * @param string $name the role's name
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
     * @return string the role's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Setter for type
     *
     * @param int $type Token's type of role
     *                  
     *                  - {@see CommonRole::TYPE_ROLE}
     *                  - {@see CommonRole::TYPE_META_EMPTY}
     *                  - {@see CommonRole::TYPE_META}
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
     * @return int Token's type of role
     *             
     *             - {@see CommonRole::TYPE_ROLE}
     *             - {@see CommonRole::TYPE_META_EMPTY}
     *             - {@see CommonRole::TYPE_META}
     *             
     */
    public function getType() : ?int
    {
        return $this->type;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('name' => new PrimitiveSerializer(self::class, 'name', 'string'), 'type' => new PrimitiveSerializer(self::class, 'type', 'int'));
    }
}