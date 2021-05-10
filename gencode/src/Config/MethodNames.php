<?php
namespace Arimac\Sigfox\GenCode\Config;

class MethodNames implements FileImpl {
    use File;

    static function getFilename(): string
    {
        return "methodNames";
    }

    public static function getMethodName(string $endpoint, string $method, string $description): string {
        $methodName = self::get($endpoint, $method);
        if($methodName&&is_string($methodName)){
            return $methodName;
        }

        if(is_array($methodName)){
            printf("WARN: METHOD_NAME: Not edited the method name. $endpoint:$method\n");
        } else {
            printf("WARN: METHOD_NAME: A new operation discovered. $endpoint:$method\n");
            self::set($endpoint, $method, ["debug"=> $description]);
        }

        return $method;
            
    }
}
