<?php

namespace Arimac\Sigfox\Test\Unit\Validatable;

use Arimac\Sigfox\Validator\Rules\Max;
use Arimac\Sigfox\Validator\Rules\MaxLength;
use Arimac\Sigfox\Validator\Rules\Min;
use Arimac\Sigfox\Validator\Rules\MinLength;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Validate;

class Foo implements Validate {
    protected ?bool $bool = null;

    protected ?int $int = null;

    protected ?string $string = null;

    protected ?int $required = null;

    public function setBool(?bool $bool){
        $this->bool = $bool;
    }

    public function getBool(): ?bool {
        return $this->bool;
    }

    public function setInt(?int $int){
        $this->int = $int;
    }

    public function getInt(): ?int {
        return $this->int;
    }

    public function setString(?string $string) {
        $this->string = $string;
    }

    public function getString(): ?string {
        return $this->string;
    }

    public function setRequired(?int $required) {
        return $this->required = $required;
    }

    public function getRequired(): ?int {
        return $this->required;
    }

    public function getValidationMetaData(): array
    {
        return [
            "bool"=> [ new Required()],
            "int"=> [ new Min(3), new Max(6)],
            "string" => [ new MinLength(3), new MaxLength(6) ],
            "required" => [ new Required]
        ];
    }
}
