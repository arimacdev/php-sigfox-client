<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Code and name of a permission
 */
class MinPerm extends Definition
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
    protected $serialize = array(new PrimitiveSerializer(self::class, 'code', 'int'), new PrimitiveSerializer(self::class, 'name', 'string'));
    /**
     * Setter for code
     *
     * @param int $code The permission's code
     *
     * @return self To use in method chains
     */
    public function setCode(?int $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Getter for code
     *
     * @return int The permission's code
     */
    public function getCode() : int
    {
        return $this->code;
    }
    /**
     * Setter for name
     *
     * @param string $name The permission's name
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
     * @return string The permission's name
     */
    public function getName() : string
    {
        return $this->name;
    }
}