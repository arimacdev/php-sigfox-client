<?php

namespace Arimac\Sigfox\Response;

/**
 * @template C
 * @template R
 */
class AsyncJob {
    /** @var string **/
    protected $createdResponseType;

    /** @var string **/
    protected $statusResponseType;

    /** @var string **/
    protected $statusCheckUrl;

    /** @var string **/
    protected $createdResponse;

    public function __construct(
        string $createdResponse, 
        string $statusResponse
    )
    {
        $this->createdResponseType = $createdResponse;
       $this->statusResponseType = $statusResponse; 
    } 
}
