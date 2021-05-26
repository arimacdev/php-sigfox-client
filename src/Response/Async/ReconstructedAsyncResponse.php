<?php

namespace Arimac\Sigfox\Response\Async;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Model;

/**
 * Async Response helper class
 *
 * The first generic parameter is the type of the status response
 *
 * @template R of Model
 */
class ReconstructedAsyncResponse {
    
    /**
     * @internal
     */
    protected Client $client;

    /**
     * @internal
     *
     * @var AsyncModel<R>
     */
    protected AsyncModel $model;

    /**
     * Initializing the async response
     *
     * @internal
     *
     * @param Client        $client
     * @param AsyncModel<R> $model
     */
    public function __construct(
        Client $client,
        AsyncModel $model
    )
    {
        $this->client= $client;
        $this->model = $model;
    }

    /**
     * Getting the status of the async job
     *
     * @throws SerializeException
     * @throws DeserializeException
     * @throws ValidationException
     * @throws UnexpectedResponseException
     * @throws ResponseException
     *
     * @return Model
     *
     * @psalm-return R
     */
    public function status() {
        return $this->client->call(
            "get", 
            $this->model->getUrl(), 
            null, 
            $this->model->getResponseType(), 
            $this->model->getErrors()
        );
    }

    /**
     * Returning the job id
     */
    public function getId(): string
    {
        return $this->model->getId();
    }
}
