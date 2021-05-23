<?php

namespace Arimac\Sigfox\Response\Paginated;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\Response\ResponseException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Exception\SigfoxException;
use Arimac\Sigfox\Exception\UnexpectedResponseException;
use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model;

/**
 * A helper to handle paginations
 *
 * @template T of Model
 * @template R of Model&PaginatedResponse<T>
 * @template E of ResponseException
 * @implements ResponseData<T>
 */
class PaginateResponse implements ResponseData {
    /**
     * @internal
     */
    protected Client $client;
    /**
     * @internal
     * @var R
     */
    protected PaginatedResponse $response;
    /**
     * @internal
     * @var array<int, string>
     * @psalm-var array<int, class-string<E>>
     */
    protected array $errors;
    /**
     * @internal
     */
    protected bool $cacheEnabled = false;
    /**
     * @internal
     * @var R[]
     */
    protected array $cache = [];
    /**
     * @internal
     */
    protected int $page = 0;

    /**
     * Initializing the pagination response
     *
     * @internal
     *
     * @param Client                  $client   To call endpoints
     * @param PaginatedResponse&Model $response Initial response
     * @param array<int,string>       $errors   Expected array list
     *
     * @psalm-param array<int, class-string<E>> $errors
     * @psalm-param R                           $response
     */
    public function __construct(
        Client $client, 
        $response, 
        array $errors
    )
    {
        $this->client = $client;
        $this->response = $response;
        $this->errors = $errors;
        $this->cache[] = $response;
    }

    /**
     * Reset the response
     *
     * @internal
     */
    function reset(): void{
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
    public function enableCache(): void{
        $this->cacheEnabled = true;
    }

    /**
     * Returning the original response
     *
     * This response will change each time after accessed the next page
     *
     * @return PaginatedResponse Original response object
     *
     * @psalm-return PaginatedResponse<T>
     */
    function getOriginalResponse(): PaginatedResponse {
        return $this->response;
    }

    /**
     * @inheritdoc
     *
     * @internal
     *
     * @psalm-return T[]
     */
    function getResponseData(): array {
        return $this->getOriginalResponse()->getData()??[];
    }

    /**
     * Fetching the next page data
     *
     * @internal
     *
     * @return bool Next page is exist or not
     *
     * @throws ResponseException
     * @throws SerializeException
     * @throws DeserializeException
     * @throws ValidationException
     * @throws UnexpectedResponseException
     */
    function nextPage(): bool {
        $paging = $this->getOriginalResponse()->getPaging();
        $next = $paging?$paging->getNext():null;
        if(is_null($next)){
            return false;
        }
        $this->page++;

         // If the response in the cache
        if($this->cacheEnabled&&isset($this->cache[$this->page])){
            $this->response = $this->cache[$this->page];
            return true;
        }

        /** @var Request $request **/

        /** @var R **/
        $response = $this->client->call("GET", $next, null, $this->response::class, $this->errors);
        // Inserting to the cache if user enabled
        if($this->cacheEnabled){
            $this->cache[] = $response;
        }
        $this->response = $response;
        return true;
    }

    /**
     * @inheritdoc
     *
     * @internal
     */
    function hasNextPage(): bool
    {
        $paging = $this->getOriginalResponse()->getPaging();
        $next = $paging?$paging->getNext():null;
        return !!$next;
    }

    /**
     * Iterate over pages
     *
     * This iterator will call the API in every iteration
     * and you can get all limited items that returned 
     * from the api as the iterated item.
     *
     * @throws SigfoxException
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
     * @throws SigfoxException
     *
     * @return ItemIterator<T>
     */
    public function items() {
        return new ItemIterator(new PageIterator($this));
    }

    /**
     * Returning the zero indexed page number
     *
     * @return int
     */
    public function getPage():int{
        return $this->page;
    }
}
