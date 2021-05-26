<?php
namespace Arimac\Sigfox\Client;

use Psr\Http\Message\StreamInterface;

/**
 * Implement this to use different HTTP clients
 */
interface ClientImpl {
    /**
     * Initializing the client
     *
     * @param string $baseUrl  The base URL of the API
     * @param string $username Username to authenticate the sigfox API by HTTP basic Authentication.
     * @param string $password Password to authenticate the sigfox API by HTTP basic Authentication.
     */
    function __construct(string $baseUrl, string $username, string $password);

    /**
     * Making a request to the API
     *
     * @param string                          $method The http method in lower case
     * @param string                          $url    The url without the base URL
     * @param array                           $body   The request body as a JSON serializable array
     * @param array                           $query  The URL encoded query as an associated array
     * @param resource|string|StreamInterface $save   Location or resource to save the response
     *
     * @return array An array containing status code, response body and headers. status code should be 
     *               an integer, the response body should be a Psr\Http\Message\StreamInterface and
     *               the headers should be array
     */
    function request(string $method, string $url, array $body=null, array $query=null, $save = null):array;
}
