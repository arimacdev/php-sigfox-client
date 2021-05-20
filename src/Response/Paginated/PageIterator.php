<?php

namespace Arimac\Sigfox\Response\Paginated;

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
 * @template T
 *
 * @template-implements Iterator<T[]>
 */
class PageIterator implements Iterator {
    /**
     * @internal
     */
    protected PaginateResponse $response;

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
     * @param PaginateResponse To load the next page items
     * @internal
     */
    public function __construct(PaginateResponse $response)
    {
        $this->response = $response;
        $this->hasNext = $this->hasNextPage();
    }

    /**
     * @inheritdoc
     *
     * @internal
     */
    public function rewind() {
        $this->position = 0;
        $this->response->reset();
        $this->hasNext = $this->hasNextPage();
    }

    /**
     * Checking the weather a next page exist or not
     *
     * @internal
     *
     * @return bool
     */
    private function hasNextPage():bool{
        $paging = $this->response->getOriginalResponse()->getPaging();

        return $paging&&$paging->getNext();
    }

    /**
     * @inheritdoc
     *
     * @return T[]
     */
    public function current() {
        return $this->response->getOriginalResponse()->getData();
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
