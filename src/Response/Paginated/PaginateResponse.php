<?php

namespace Arimac\Sigfox\Response\Paginated;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request;

/**
 * A helper to handle paginations
 *
 * @template T
 * @template R of PaginatedResponse
 */
class PaginateResponse {
    /**
     * @internal
     */
    protected Client $client;
    /**
     * @internal
     */
    protected PaginatedResponse $response;
    /**
     * @internal
     */
    protected PaginatedRequest $request;
    /**
     * @internal
     */
    protected array $errors;
    /**
     * @internal
     */
    protected bool $cacheEnabled = false;
    /**
     * @internal
     */
    protected array $cache = [];
    /**
     * @internal
     */
    protected int $page = 0;
    /**
     * @internal
     */
    protected int $startedOffset;

    /**
     * Initializing the pagination response
     *
     * @internal
     *
     * @param Client $client   To call endpoints
     * @param PaginatedRequest To fetch request data
     * @param PaginateResponse Initial response
     * @param array            Expected array list
     */
    public function __construct(
        Client $client, 
        PaginatedRequest $request, 
        PaginatedResponse $response, 
        array $errors
    )
    {
        $this->client = $client;
        $this->request = $request;
        $this->response = $response;
        $this->errors = $errors;
        $this->startedOffset = $request->getOffset();
        $this->cache[] = $response;
    }

    /**
     * Reset the response
     *
     * @internal
     */
    public function reset(){
        $this->request->setOffset($this->startedOffset);
        $this->page = 0;
        $this->response = $this->cache[0];
    }

    /**
     * Enable the cache
     *
     * This method allows to reuse the iterator without fetching
     * already fetched data again. Do not call this method if you
     * do not want to reuse the iterator. Because all data are
     * storing in the memory.
     */
    public function enableCache(){
        $this->cacheEnabled = true;
    }

    /**
     * Returning the original response
     *
     * This response will change each time after accessed the next page
     *
     * @return PaginatedResponse|R Original response object
     */
    public function getOriginalResponse(): PaginatedResponse {
        return $this->response;
    }

    /**
     * Fetching the next page data
     *
     * @internal
     *
     * @return bool Next page is exist or not
     */
    public function nextPage(): bool {
       
        $paging = $this->response->getPaging();
        $next = $paging?$paging->getNext():null;
        if(is_null($next)){
            return false;
        }
        $request = $this->request;
        $newOffset = $request->getOffset() + $request->getLimit();
        $request->setOffset($newOffset);
        $this->page++;

         // If the response in the cache
        if($this->cacheEnabled&&isset($this->cache[$this->page])){
            $this->response = $this->cache[$this->page];
            return true;
        }

        /** @var Request $request **/

        /** @var PaginatedResponse **/
        $response = $this->client->call("GET", $next, $request, $this->response::class, $this->errors);
        // Inserting to the cache if user enabled
        if($this->cacheEnabled){
            $this->cache[] = $response;
        }
        $this->response = $response;
        return true;
    }

    /**
     * Iterate over pages
     *
     * This iterator will call the API in every iteration
     * and you can get all limited items that returned 
     * from the api as the iterated item.
     *
     * @return PageIterator<T>
     */
    public function pages() {
        return new PageIterator($this);
    }

    /**
     * Iterate over items
     *
     * This iterator will iterate over all fetched items. This
     * iterator is calling the API and fetching more values
     * automatically when the iterator reached to the end.
     *
     * @return ItemIterator<T>
     */
    public function items() {
        return new ItemIterator(new PageIterator($this));
    }
}
