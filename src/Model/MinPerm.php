<?php

namespace Arimac\Sigfox\Model;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Code and name of a permission
 */
class MinPerm extends Model
{
    /**
     * The permission's code
     *
     * @var int
     */
    protected ?int $code = null;
    /**
     * The permission's name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for code
     *
     * @param int $code The permission's code
     *
     * @return static To use in method chains
     */
    public function setCode(?int $code)
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Getter for code
     *
     * @return int The permission's code
     */
    public function getCode() : ?int
    {
        return $this->code;
    }
    /**
     * Setter for name
     *
     * @param string $name The permission's name
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
     * @return string The permission's name
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('code' => new PrimitiveSerializer('int'), 'name' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}