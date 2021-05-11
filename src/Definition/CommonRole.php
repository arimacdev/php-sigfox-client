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
     * @var self::TYPE_*
     */
    protected ?int $type = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'name', 'string'), new PrimitiveSerializer(self::class, 'type', 'int'));
    protected $validations = array('name' => array('max:100', 'nullable'));
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
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Setter for type
     *
     * @param self::TYPE_* $type Token's type of role
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
     * @return self::TYPE_* Token's type of role
     */
    public function getType() : int
    {
        return $this->type;
    }
}