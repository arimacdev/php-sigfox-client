<?php

namespace Arimac\Sigfox\Definition;

/**
 * Contains the token information of the device
 */
class Token
{
    /** OK */
    public const STATE_OK = 0;
    /** OFF_CONTRACT */
    public const STATE_OFF_CONTRACT = 1;
    /** NA_FOR_API */
    public const STATE_NA_FOR_API = 2;
    /** INVALID_TOKEN */
    public const STATE_INVALID_TOKEN = 3;
    /**
     * - `Token::STATE_OK`
     * - `Token::STATE_OFF_CONTRACT`
     * - `Token::STATE_NA_FOR_API`
     * - `Token::STATE_INVALID_TOKEN`
     *
     * @var int
     */
    protected int $state;
    /**
     * Token state description
     * - Valid
     * - Off Contract
     * - Not applicable for API
     * - Invalid
     *
     * @var string
     */
    protected string $detailMessage;
    /**
     * The device's communication end time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected int $end;
    /**
     * The number of free messages left for this token
     *
     * @var int
     */
    protected int $freeMessages;
    /**
     * The number of free messages already sent for this token
     *
     * @var int
     */
    protected int $freeMessagesSent;
}