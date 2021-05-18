<?php

namespace Arimac\Sigfox\Client;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Validator;

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
     * @param string   $method   HTTP method
     * @param string   $url      The URL to call
     * @param Request  $request  Request data
     * @param string   $response Response class name
     * @param string[] $errors   All expected HTTP errors as an associated array `[statusCode=>className]`
     *
     * @return Model An instance of $response type.
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
        if ($request) {
            Validator::validate($request);
            $requestSerializer = new ClassSerializer($request::class);
            $serialized = $requestSerializer->serialize($request);

            $body = Helper::arrayFilterKeys($serialized, $request->getBodyFields());
            $query = Helper::arrayFilterKeys($serialized, $request->getQueryFields());
        }
        list($statusCode, $body) = $this->inner->request($method, $url, $body, $query);
        $statusCode = (int) $statusCode;
        if ($responseClass) {
            if ($statusCode >= 200 && $statusCode < 204) {
                $responseJson = json_decode($body, true);
                $responseSerializer = new ClassSerializer($responseClass);
                $deserialized = $responseSerializer->deserialize($responseJson);
                return $deserialized;
            } else if ($statusCode == 204) {
                return null;
            } else if ($statusCode > 400) {
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
