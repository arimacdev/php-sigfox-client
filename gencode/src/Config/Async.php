<?php

namespace Arimac\Sigfox\GenCode\Config;

class Async implements FileImpl
{
    use File;

    static function getFilename(): string
    {
        return "async";
    }

    public static function getAsyncDetails(string $endpoint, string $method): ?array
    {
        $startRequest = self::get("startRequests", $endpoint, $method);
        if($startRequest){
            $statusRequest = self::get("statusRequests", $startRequest["status"]);
            return array_merge($startRequest, $statusRequest);
        }

        return null;
    }

    public static function isAsyncStatusEndpoint(string $endpoint):bool{
        return (bool)self::get("statusRequests", $endpoint);
    }
}

