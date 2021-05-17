<?php

namespace Arimac\Sigfox\Test\Unit\Serializable;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;

class PrimitivePropertiesDefinition extends Definition
{

    protected ?string $name = null;

    protected ?int $age = null;

    protected ?float $height = null;

    protected ?bool $married = null;

    protected ?array $hobbies = null;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setAge(string $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setMarried(bool $married): self
    {
        $this->married = $married;

        return $this;
    }

    public function getMarried(): ?bool
    {
        return $this->married;
    }

    public function setHobbies(array $hobbies): self
    {
        $this->hobbies = $hobbies;

        return $this;
    }

    public function getHobbies(): ?array
    {
        return $this->hobbies;
    }

    public function getSerializeMetaData(): array
    {
        return [
            "name" => new PrimitiveSerializer("string"),
            "age" => new PrimitiveSerializer("int"),
            "height" => new PrimitiveSerializer("float"),
            "married" => new PrimitiveSerializer("bool"),
            "hobbies" => new PrimitiveSerializer("array")
        ];
    }
}
