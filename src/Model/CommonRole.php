<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\MaxLength;
/**
 * generic information about a Role
 */
class CommonRole extends Model
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
     * Setter for name
     *
     * @param string $name the role's name
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
        $serializers = array('name' => new PrimitiveSerializer('string'), 'type' => new PrimitiveSerializer('int'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('name' => array(new MaxLength(100)));
        return $rules;
    }
}