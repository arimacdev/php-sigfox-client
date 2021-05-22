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

    public function save(){
        if(isset($this->properties["paging"])&&isset($this->properties["data"])){
            $this->implement("Arimac\\Sigfox\\Response\\Paginated\\PaginatedResponse");
            $type = $this->properties["data"][0];
            $type = substr($type, 0, strlen($type)-2);
            $type = $this->useType($type);
            $this->class->setDocComment(Helper::normalizeDocComment([
                ["implements", "PaginatedResponse<$type>" , null]
            ]));
        }
        parent::save();
    }
}
