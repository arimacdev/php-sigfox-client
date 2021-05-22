<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Client\ClientImpl;
use Arimac\Sigfox\Client\Guzzle;

/**
 * Constructor of the `Sigfox` class.
 *
 * Since `Sigfox` is a auto generated class. This class is using to implement manual methods that should be in
 * `Sigfox` class.
 */
abstract class SigfoxExt {
    /**
     * @internal
     *
     * @var Client
     */
    protected $client;

    /**
     * Creating a Sigfox client instance
     *
     * @param string       $username Username to authenticate for Sigfox API
     * @param string       $password Password to authenticate for Sigfox API
     * @param class-string $client   HTTP client to use to call Sigfox API
     */
    public function __construct(string $username, string $password, string $client = Guzzle::class)
    {
        /** @var ClientImpl **/
        $innerClient = new $client($this->getBaseUrl(), $username, $password);
        $this->client = new Client($innerClient);
    }

    /**
     * Returning the base URL
     *
     * @internal
     *
     * @return string
     */
    abstract public function getBaseUrl(): string;
}
