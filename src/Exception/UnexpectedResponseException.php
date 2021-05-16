<?php
namespace Arimac\Sigfox\Exception;

/**
 * Server returned an unexpected response code
 */
class UnexpectedResponseException extends SigfoxException {
    /** @internal **/
    protected int $statusCode;

    /** @internal **/
    protected string $body;

    /**
     * Initializing the exception
     *
     * @internal
     *
     * @param int $statusCode HTTP status code
     * @param string $body Body content
     */
    public function __construct(int $statusCode, string $body)
    {
        parent::__construct("Server returned an unexpected response with the status code $statusCode. $body");
        $this->statusCode = $statusCode;
        $this->body = $body;    
    }

    /**
     * Returning the HTTP status code of the response
     *
     * @return int
     */
    public function getStatusCode(): int{
        return $this->statusCode;
    }

    /**
     * Returning the body of the response
     *
     * @return string
     */
    public function getBody(): string {
        return $this->body;
    }
}
