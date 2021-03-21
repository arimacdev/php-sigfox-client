<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
/**
 * Contains the token information of the device
 */
class Token extends Definition
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
    protected ?int $state = null;
    /**
     * Token state description
     * - Valid
     * - Off Contract
     * - Not applicable for API
     * - Invalid
     *
     * @var string
     */
    protected ?string $detailMessage = null;
    /**
     * The device's communication end time (in milliseconds since the Unix Epoch)
     *
     * @var int
     */
    protected ?int $end = null;
    /**
     * The number of free messages left for this token
     *
     * @var int
     */
    protected ?int $freeMessages = null;
    /**
     * The number of free messages already sent for this token
     *
     * @var int
     */
    protected ?int $freeMessagesSent = null;
    /**
     * @param int $state - 0 -> OK
     * - `Token::STATE_OFF_CONTRACT`
     * - `Token::STATE_NA_FOR_API`
     * - `Token::STATE_INVALID_TOKEN`
     */
    function setState(?int $state)
    {
        $this->state = $state;
    }
    /**
     * @return int - 0 -> OK
     * - `Token::STATE_OFF_CONTRACT`
     * - `Token::STATE_NA_FOR_API`
     * - `Token::STATE_INVALID_TOKEN`
     */
    function getState() : ?int
    {
        return $this->state;
    }
    /**
     * @param string $detailMessage Token state description
     * - Valid
     * - Off Contract
     * - Not applicable for API
     * - Invalid
     */
    function setDetailMessage(?string $detailMessage)
    {
        $this->detailMessage = $detailMessage;
    }
    /**
     * @return string Token state description
     * - Valid
     * - Off Contract
     * - Not applicable for API
     * - Invalid
     */
    function getDetailMessage() : ?string
    {
        return $this->detailMessage;
    }
    /**
     * @param int $end The device's communication end time (in milliseconds since the Unix Epoch)
     */
    function setEnd(?int $end)
    {
        $this->end = $end;
    }
    /**
     * @return int The device's communication end time (in milliseconds since the Unix Epoch)
     */
    function getEnd() : ?int
    {
        return $this->end;
    }
    /**
     * @param int $freeMessages The number of free messages left for this token
     */
    function setFreeMessages(?int $freeMessages)
    {
        $this->freeMessages = $freeMessages;
    }
    /**
     * @return int The number of free messages left for this token
     */
    function getFreeMessages() : ?int
    {
        return $this->freeMessages;
    }
    /**
     * @param int $freeMessagesSent The number of free messages already sent for this token
     */
    function setFreeMessagesSent(?int $freeMessagesSent)
    {
        $this->freeMessagesSent = $freeMessagesSent;
    }
    /**
     * @return int The number of free messages already sent for this token
     */
    function getFreeMessagesSent() : ?int
    {
        return $this->freeMessagesSent;
    }
}