<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Client\ClientImpl;
use Arimac\Sigfox\Client\Guzzle;

/**
 * Constructor of the `Sigfox` class.
 *
 * Since `Sigfox` is a auto generated class. This class is using to implement manual methods that should be in
 * {`Sigfox` class.
 */
class SigfoxExt {
    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var Client
     */
    protected $client;

    /**
     * Creating a Sigfox client instance
     *
     * @param string $username Username to authenticate for Sigfox API
     * @param string $password Password to authenticate for Sigfox API
     * @param string $client   HTTP client to use to call Sigfox API
     */
    public function __construct(string $username, string $password, string $client = Guzzle::class)
    {
        /** @var ClientImpl **/
        $innerClient = new $client($this->baseUrl, $username, $password);
        $this->client = new Client($innerClient);
    }
}
