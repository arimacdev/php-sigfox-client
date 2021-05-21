<?php

namespace Arimac\Sigfox\GenCode;

class Response extends Model
{
    public function addSetter(
        string $type,
        string $propertyName,
        ?string $docComment = null
    ) {
        if ($docComment) {
            $indent = strlen($docComment) - strlen(trim($docComment));
            $indentStr = str_repeat(" ", $indent);

            $docComment = Helper::strReplaceFirst(
                "* @",
                "* @internal\n" . $indentStr . " *\n" . $indentStr . " * @",
                $docComment
            );
        }
        parent::addSetter($type, $propertyName, $docComment);
    }

    public function addProperty(
        string $name,
        string $type,
        ?string $docComment = null,
        $value = null,
        bool $nullable = true
    ) {
        parent::addProperty($name, $type, $docComment, $value, $nullable);
        if ($name === "paging") {
            $this->implement("Arimac\\Sigfox\\Response\\Paginated\\PaginatedResponse");
        }
    }
}
