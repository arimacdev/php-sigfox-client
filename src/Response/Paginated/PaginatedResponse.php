<?php

namespace Arimac\Sigfox\Response\Paginated;

use Arimac\Sigfox\Model\Paging;
use Arimac\Sigfox\Model;

/**
 * Responses that returning from pagination requests
 *
 * @template T of Model
 */
interface PaginatedResponse {
    /**
     * Setting the data for current page
     *
     * @param T[] $data
     *
     * @return static
     */
    function setData(?array $data);

    /**
     * Returning the data for the current page
     *
     * @return T[]
     */
    function getData(): ?array;

    /**
     * Set pagination information
     *
     * @param Paging $paging
     *
     * @return static
     */
    function setPaging(?Paging $paging);

    /**
     * Returning the pagination information
     *
     * @return Paging
     */
    function getPaging(): ?Paging;
}
