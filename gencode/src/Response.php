<?php

namespace Arimac\Sigfox\GenCode;

class Response extends Definition
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
}
