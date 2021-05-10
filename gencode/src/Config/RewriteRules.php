<?php

namespace Arimac\Sigfox\GenCode\Config;

class RewriteRules implements FileImpl {
    use File;

    static function getFilename(): string {
        return "rewrite";
    }

    public static function rewrite(string $endpoint): string {
        $rewrite = self::get($endpoint);
        if(!$rewrite){
            self::set($endpoint, $endpoint);
            printf("WARN: REWRITE: A new endpoint was discovered. $endpoint\n");
            return $endpoint;
        } else {
            return $rewrite;
        }
    }
}
