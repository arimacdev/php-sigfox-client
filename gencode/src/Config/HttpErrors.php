<?php
namespace Arimac\Sigfox\GenCode\Config;

class HttpErrors implements FileImpl {
    use File;

    static function getFilename(): string
    {
        return "httpErrors";
    }

    public static function getError(string $statusCode): string {
        return self::get($statusCode);
    }
}
