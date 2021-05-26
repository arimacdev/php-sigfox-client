<?php

namespace Arimac\Sigfox;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Client\ClientImpl;
use Arimac\Sigfox\Client\Guzzle;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Response\Async\AsyncModel;
use Arimac\Sigfox\Response\Async\ReconstructedAsyncResponse;
use InvalidArgumentException;

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

    /**
     * Making an async response from a serialized value
     *
     * @param string $value
     *
     * @return Model
     *
     * @throws InvalidArgumentException
     * @throws SerializeException
     * @throws DeserializeException
     * @throws ValidationException
     * @throws UnexpectedResponseException
     * @throws ResponseException
     *
     * @psalm-return Model
     */
    public function jobStatus(string $value): Model {
        $decoded = base64_decode($value);
        if(!$decoded){
            throw new InvalidArgumentException("Expecting an async response id. But got $value.", 0);
        }

        $exploded = explode(":",$decoded, 2);
        if(count($exploded)!==2){
            throw new InvalidArgumentException("Expecting an async response id. But got $value.", 1);
        }

        $className = "Arimac\\Sigfox\\Response\\Async\\Model\\".$exploded[0];
        if(!class_exists($className)){
            throw new InvalidArgumentException("Expecting an async response id. But got $value.", 3);
        }

        $params = explode(",",$exploded[1]);
        /** @var AsyncModel<Model> **/
        $model = new $className($params);
        
        $response =  new ReconstructedAsyncResponse($this->client, $model);

        return $response->status();
    }
}
