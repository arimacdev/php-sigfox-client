<?php

namespace Arimac\Sigfox\Test\Unit\Serializable;

use Arimac\Sigfox\Serializer\ClassSerializer;

class DefinitionWithChild extends PrimitivePropertiesDefinition {
    protected ?PrimitivePropertiesDefinition $child = null;

    public function setChild(?PrimitivePropertiesDefinition $child): self{
        $this->child = $child;

        return $this;
    }

    public function getChild(): ?PrimitivePropertiesDefinition {
        return $this->child;
    }

    public function getSerializeMetaData(): array
    {
        $metaData = parent::getSerializeMetaData();
        $metaData["child"] = new ClassSerializer(PrimitivePropertiesDefinition::class);
        return $metaData;
    }
}
