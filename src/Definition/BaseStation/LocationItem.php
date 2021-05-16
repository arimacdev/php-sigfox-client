<?php

namespace Arimac\Sigfox\Definition\BaseStation;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class LocationItem extends Definition
{
    /**
     * location code
     *
     * @var int
     */
    protected ?int $code = null;
    /**
     * location name
     *
     * @var string
     */
    protected ?string $name = null;
    /**
     * Setter for code
     *
     * @param int $code location code
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
     * @return int location code
     */
    public function getCode() : ?int
    {
        return $this->code;
    }
    /**
     * Setter for name
     *
     * @param string $name location name
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
     * @return string location name
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
        return array('code' => new PrimitiveSerializer(self::class, 'code', 'int'), 'name' => new PrimitiveSerializer(self::class, 'name', 'string'));
    }
}