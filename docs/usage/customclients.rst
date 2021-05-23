Custom HTTP Clients
===================

For some reasons not all developers like to use ``guzzlehttp`` client. As such cases this API client is not only
limited to the ``guzzlehttp`` client. You can integrate your HTTP client with this client. Only you have to do is
create a new class by implementing `ClientImpl`_ interface.

As the first step, initialize your client using the ``baseUrl``, ``username`` and the ``password`` in the 
constructor.

.. code-block:: php
    :lineos:

    class MySigfoxHTTPClient {
        protected $client;

        public function __construct(string $baseUrl, string $username, string $password){
            $this->client = new HTTPClient($baseUrl, $username, $password);
        }
    }

Next implement the ``request`` method. It must take HTTP method as a first argument, Url without base url as
the second argument and body and query parameters as third and fourth arguments. And it must return an array
containing status code and the content of the body as first and second items. Do not throw any exceptions when
server returned HTTP error codes. Let this client library handle them.

.. code-block:: php
    :lineos:

    public function request(string $method, string $url, ?array $body, ?array $query){
        $this->client->request(
            $method,
            $url,
            $body?json_encode($body):null,
            $query?http_build_query($query):null
        );
    }

See the `Guzzle`_ class to get an idea about implementation.

Next:- :doc:`Exception Handling<exceptions>`

.. _ClientImpl: https://arimacdev.github.io/php-sigfox-client/classes/Arimac-Sigfox-Client-ClientImpl.html
.. _Guzzle: https://github.com/arimacdev/php-sigfox-client/blob/main/src/Client/Guzzle.php
