<?php
namespace Arimac\Sigfox\GenCode\Config;

class TypeAlias implements FileImpl {
    use File;

    static function getFilename(): string
    {
        return "typeAlias";
    }

    public static function getAlias(string $className): ?string {
        return self::get($className);
    }

    public static function addAlias(string $className, string $alias) {
        self::set($className, $alias);
    }
}
