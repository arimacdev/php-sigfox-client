<?php

namespace Arimac\Sigfox\Exception\Response;

use Arimac\Sigfox\Exception\DeserializeException;
use Throwable;

/**
 * HTTP 405 Method Not Allowed error
 */
class MethodNotAllowedException extends ResponseException {
    /** @internal **/
    protected array $allowedMethods;

     /**
     * Initializing the exception
     *
     * @internal
     *
     * @param string    $message        The error message that returning from the server
     * @param string[]  $allowedMethods All allowed HTTP methods
     * @param Throwable $prev           Previous exception
     */
    public function __construct(string $message,array $allowedMethods, Throwable $prev = null)
    {
        parent::__construct($message, 405, $prev);
        $this->allowedMethods = $allowedMethods;
    }

    /**
     * Returning all available HTTP methods for the endpoint
     *
     * @return string[]
     */
    public function getAllowedMethods(): array {
        return $this->allowedMethods;
    }

    /**
     * @internal
     *
     * @inheritdoc
     *
     * @param mixed $value
     *
     * @return self
     */
    public static function deserialize($value)
    {
        if(!is_array($value)||!isset($value["message"])||!isset($value["allowedMethods"])){
            throw new DeserializeException(
                ["array(message)"],
                is_array($value)? "array(".implode(", ", array_keys($value)).")" :gettype($value)
            );
        }

        $message = $value["message"];
        if(!is_string($message)){
            throw new DeserializeException(["string"], gettype($message));
        }

        $allowedMethods = $value["allowedMethods"];

        if(!is_array($allowedMethods)){
            throw new DeserializeException(["string[]"], gettype($value["allowedMethods"]));
        }

        foreach($allowedMethods as $method){
            if(!is_string($method)){
                throw new DeserializeException(["string"], gettype($method));
            }
        }

        return new MethodNotAllowedException($message, $allowedMethods);
    }
}
