<?php

namespace Arimac\Sigfox\Response\Async;

use Arimac\Sigfox\Helper;
use Arimac\Sigfox\Model;
use Arimac\Sigfox\Exception\Response\ResponseException;

/**
 * Async data
 *
 * @template R of Model
 */
abstract class AsyncModel {

    /**
     * @var string[]
     */
    protected array $params = [];

    /**
     * Initializing the model
     *
     * @param string[] $params
     */
    public final function __construct(array $params)
    {
        $this->params = $params;
    }

    /**
     * Returning the status response type
     *
     * @return class-string<R>
     */
    abstract public function getResponseType(): string;

    /**
     * Returning the endpoint pattern
     *
     * @return string
     */
    abstract public function getEndpoint(): string;

    /**
     * Returning all errors that can be return from the status endpoint
     *
     * @return array<int, class-string<ResponseException>>
     */
    abstract public function getErrors(): array;

    /**
     * Returning the formatted url with parameters
     *
     * @return string
     */
    public function getUrl(): string{
        $endpoint = $this->getEndpoint();
        $params = $this->params;

        return Helper::bindUrlParams($endpoint, ...$params);
    }

    /**
     * Returning the idenity of the model
     *
     * @return string
     */
    public function getId(): string {
        $class = get_class($this);
        $slices = explode("\\", $class);
        $className = array_pop($slices);
        $params = implode(",", $this->params);
        return base64_encode($className.":".$params);
    }
}
