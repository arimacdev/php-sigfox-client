<?php

namespace Arimac\Sigfox\Response\Paginated;


/**
 * @template T of \Arimac\Sigfox\Model
 */
interface ResponseData {
    /**
     * Returning the original response
     * 
     * @internal
     *
     * @psalm-return T[]
     */
    function getResponseData(): array;

    /**
     * Reset the response
     *
     * @internal
     */
    function reset(): void;

    /**
     * Returning the weather has next page
     *
     * @internal
     *
     * @return bool
     */
    function hasNextPage(): bool;

    /**
     * Fetching the next page data
     *
     * @internal
     *
     * @return bool Next page is exist or not
     */
    function nextPage(): bool;
}
