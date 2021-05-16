<?php

namespace Arimac\Sigfox\Client;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\Serializer;

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
     * @param string  $method   HTTP method
     * @param string  $url      The URL to call
     * @param Request $request  Request data
     * @param string  $response Response class name
     *
     * @return Definition An instance of $response type.
     */
    public function call(string $method, string $url, ?Request $request = null, ?string $responseClass = null): ?Definition
    {
        $body = null;
        $query = null;
        if (isset($request)) {
            $serializedMetaData = $request->getSerializeMetaData();
            $bodyFields = $request->getBodyFields();
            $queryFields = $request->getQueryFields();

            $body = [];
            foreach ($bodyFields as $propertyName) {
                /** @var Serializer **/
                $serializer = $serializedMetaData[$propertyName];
                $getterName = "get" . ucfirst($propertyName);
                $body[$propertyName] = $serializer->deserialize($request->$getterName());
            }

            $query = [];
            foreach ($queryFields as $propertyName) {
                /** @var Serializer **/
                $serializer = $serializedMetaData[$propertyName];
                $getterName = "get" . ucfirst($propertyName);
                $query[$propertyName] = $serializer->deserialize($request->$getterName());
            }
        }

        $response = $this->inner->request($method, $url, $body, $query);
        if ($responseClass) {
            $responseJson = json_decode($response[1], true);
            $statusCode = $response[0];
            if (is_array($responseJson)) {
                /** @var Definition **/
                $response = new $responseClass;
                $serializedMetaData = $response->getSerializeMetaData();
                /** @var Serializer $serializer **/
                foreach ($serializedMetaData as $propertyName => $serializer) {
                    $value = $responseJson[$propertyName];
                    $serialized = $serializer->serialize($value);
                    $setter = "set" . ucfirst($propertyName);
                    $response->$setter($serialized);
                }

                return $response;
            }
            return $responseJson;
        }
        return null;
    }
}
