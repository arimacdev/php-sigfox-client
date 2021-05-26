<?php

namespace Arimac\Sigfox\Response\Async;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Model;

/**
 * Async Response helper class
 *
 * The first generic parameter is the type of start response
 * And the second generic parameter is the type of status response
 *
 * @template S of Model
 * @template R of Model
 *
 * @extends ReconstructedAsyncResponse<R>
 */
class AsyncResponse extends ReconstructedAsyncResponse {
   /**
     * @var S
     * 
     * @internal   
     */
    protected Model $startResponse;

    /**
     * Initializing the async response
     *
     * @internal
     *
     * @param Client        $client
     * @param AsyncModel<R> $model
     * @param S             $startResponse
     */
    public function __construct(
        Client $client,
        AsyncModel $model,
        Model $startResponse
    )
    {
        parent::__construct($client, $model);
        $this->startResponse = $startResponse;
    }

    /**
     * Reurning the original job start response
     *
     * @return Model
     *
     * @psalm-return S
     */
    public function getOriginalResponse(): Model {
        return $this->startResponse;
    }
}
