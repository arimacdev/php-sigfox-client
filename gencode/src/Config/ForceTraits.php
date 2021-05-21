<?php
namespace Arimac\Sigfox\GenCode\Config;

class ForceTraits implements FileImpl {
    use File;

    static function getFilename(): string
    {
        return "forceTraits";
    }

    public static function exist(string $className): bool {
         return in_array($className,self::get("forceTraits"));
    }
}
