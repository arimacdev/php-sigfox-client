<?php

namespace Arimac\Sigfox\Client;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Exception\ValidationException;
use Psr\Http\Message\StreamInterface;

/**
 * Client wrapper that serializing and deserializing data before sending and receiving
 */
class Client
{
    /** @var ClientImpl **/
    protected $inner;

    /**
     * Initializing the client
     *
     * @param ClientImpl $inner
     */
    public function __construct(ClientImpl $inner)
    {
        $this->inner = $inner;
    }

    /**
     * Calling the inner client after serialized and validated data.
     *
     * @template T of Model
     * @template E of ResponseException
     *
     * @param string            $method        HTTP method
     * @param string            $url           The URL to call
     * @param Request           $request       Request data
     * @param class-string<T>   $responseClass Response class name
     * @param array<int,string> $errors        All expected HTTP errors as an associated
     *                                         array `[statusCode=>className]`
     *
     * @psalm-param array<int,class-string<E>> $errors
     *
     * @throws SerializeException
     * @throws DeserializeException
     * @throws ValidationException
     * @throws ResponseException
     * @throws UnexpectedResponseException
     *
     * @return T An instance of $response type.
     */
    public function call(
        string $method,
        string $url,
        ?Request $request = null,
        ?string $responseClass = null,
        array $errors = []
    ): ?Model {
        
        list($query, $body) = Helper::splitRequest($request);
        
        // Calling API endpoint
        list($statusCode, $body) = $this->inner->request($method, trim($url,"/"), $body, $query);
        $statusCode = (int) $statusCode;

        // If accepting a response
        if ($responseClass) {
            if ($statusCode >= 200 && $statusCode < 204) { // 200..203 requests accepting a response
                $responseJson = json_decode($body, true);
                if(json_last_error()!==JSON_ERROR_NONE) {
                    throw new DeserializeException([
                        "json-string"
                    ], "string");
                }
                $responseSerializer = new ClassSerializer($responseClass);
                $deserialized = $responseSerializer->deserialize($responseJson);
                return $deserialized;
            }
        }

        if ($statusCode == 204) { // 204 success but not accepting a body
            return null;
        } else if ($statusCode >= 400) { // 400>= is accepting a error
            if (isset($errors[$statusCode])) {
                $responseJson = json_decode($body, true);
                $exception = $errors[$statusCode]::deserialize($responseJson);
                throw $exception;
            }
        }
        throw new UnexpectedResponseException($statusCode, $body);
    }

    /**
     * Downloading a file .
     *
     * @template T of Model
     * @template E of ResponseException
     *
     * @param string                          $method  HTTP method
     * @param string                          $url     The URL to call
     * @param Request                         $request Request data
     * @param resource|StreamInterface|string $sink    Response class name
     * @param array<int,string>               $errors  All expected HTTP errors as an associated
     *                                                 array `[statusCode=>className]`
     *
     * @psalm-param array<int,class-string<E>> $errors
     *
     * @throws ResponseException
     * @throws UnexpectedResponseException
     * @throws SerializeException
     * @throws DeserializeException
     * @throws ValidationException
     *
     * @return void
     */
    public function download(
        string $method,
        string $url,
        ?Request $request = null,
        $sink,
        array $errors = []
    ) {
        list($query, $body) = Helper::splitRequest($request); 
        // Calling API endpoint
        list($statusCode, $body) = $this->inner->request($method, $url, $body, $query, $sink);
        $statusCode = (int) $statusCode;

        // If accepting a response
        if ($statusCode >= 200 && $statusCode < 204) { // 200..203 requests accepting a response
            return;
        }

        if ($statusCode >= 400) { // 400>= is accepting a error
            if (isset($errors[$statusCode])) {
                $responseJson = json_decode($body, true);
                $exception = $errors[$statusCode]::deserialize($responseJson);
                throw $exception;
            }
        }
        throw new UnexpectedResponseException($statusCode, $body);
    }
}
