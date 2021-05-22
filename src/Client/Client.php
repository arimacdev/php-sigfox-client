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
use Arimac\Sigfox\Validator\Validator;
use Arimac\Sigfox\Exception\ValidationException;

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
        $body = null;
        $query = null;
        // Serializing and validating data
        if ($request) {
            Validator::validate($request);
            $requestSerializer = new ClassSerializer($request::class);
            $serialized = $requestSerializer->serialize($request);

            $bodyField = $request->getBodyField();
            if($bodyField && isset($serialized[$bodyField])){
                $body = $serialized[$bodyField];
            }

            $query = Helper::arrayFilterKeys($serialized, $request->getQueryFields());
        }
        // Calling API endpoint
        list($statusCode, $body) = $this->inner->request($method, $url, $body, $query);
        $statusCode = (int) $statusCode;

        // If accepting a response
        if ($responseClass) {
            if ($statusCode >= 200 && $statusCode < 204) { // 200..203 requests accepting a response
                $responseJson = json_decode($body, true);
                $responseSerializer = new ClassSerializer($responseClass);
                $deserialized = $responseSerializer->deserialize($responseJson);
                return $deserialized;
            } else if ($statusCode == 204) { // 204 is not accepting a response
                return null;
            } else if ($statusCode > 400) { // 400> is accepting a error
                if (isset($errors[$statusCode])) {
                    $responseJson = json_decode($body, true);
                    $exception = $errors[$statusCode]::deserialize($responseJson);
                    throw $exception;
                }
                throw new UnexpectedResponseException($statusCode, $body);
            }
        }
        return null;
    }
}
