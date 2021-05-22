<?php

namespace Arimac\Sigfox\Response\Paginated;

use Arimac\Sigfox\Exception\SigfoxException;
use Iterator;

/**
 * Iterating over pages in the paginated response
 *
 * This iterator will automatically calling the API
 * and fetching data items in each iteration.
 *
 * This iterator will returning an array of items as
 * the value and zero indexed key of the item as the key
 *
 * @template T of \Arimac\Sigfox\Model
 *
 * @implements Iterator<T[]>
 */
class PageIterator implements Iterator {
    /**
     * @internal
     *
     * @var ResponseData<T>
     */
    protected ResponseData $response;

    /**
     * @internal
     */
    protected bool $hasNext;

    /**
     * @internal
     */
    protected int $position = 0;

    /**
     * Initializing the page iterator
     *
     * @param ResponseData<T> $response To load the next page items
     *
     * @internal
     *
     * @throws SigfoxException
     */
    public function __construct(ResponseData $response)
    {
        $this->response = $response;
        $this->hasNext = $this->response->hasNextPage();
    }

    /**
     * @inheritdoc
     *
     * @internal
     *
     * @throws SigfoxException
     */
    public function rewind() {
        $this->position = 0;
        $this->response->reset();
        $this->hasNext = $this->response->hasNextPage();
    }

    /**
     * @inheritdoc
     *
     * @return T[]
     */
    public function current() {
        return $this->response->getResponseData();
    }

    /**
     * @inheritdoc
     *
     * @return int
     */
    public function key() {
        return $this->position;
    }

    /**
     * @inheritdoc
     *
     * @internal
     *
     * @throws SigfoxException
     */
    public function next() {
        $this->position++;
        $this->hasNext = $this->response->nextPage();
    }

    /**
     * @inheritdoc
     *
     * @internal
     */
    public function valid() {
        return $this->hasNext;
    }
}
