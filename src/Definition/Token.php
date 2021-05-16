<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
/**
 * Contains the token information of the device
 */
class Token extends Definition
{
    /**
     * OK
     */
    public const STATE_OK = 0;
    /**
     * OFF_CONTRACT
     */
    public const STATE_OFF_CONTRACT = 1;
    /**
     * NA_FOR_API
     */
    public const STATE_NA_FOR_API = 2;
    /**
     * INVALID_TOKEN
     */
    public const STATE_INVALID_TOKEN = 3;
    /**
     * - {@see Token::STATE_OK}
     * - {@see Token::STATE_OFF_CONTRACT}
     * - {@see Token::STATE_NA_FOR_API}
     * - {@see Token::STATE_INVALID_TOKEN}
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
     * Setter for state
     *
     * @param int $state 
     *                   
     *                   - {@see Token::STATE_OK}
     *                   - {@see Token::STATE_OFF_CONTRACT}
     *                   - {@see Token::STATE_NA_FOR_API}
     *                   - {@see Token::STATE_INVALID_TOKEN}
     *                   
     *
     * @return self To use in method chains
     */
    public function setState(?int $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Getter for state
     *
     * @return int 
     *             
     *             - {@see Token::STATE_OK}
     *             - {@see Token::STATE_OFF_CONTRACT}
     *             - {@see Token::STATE_NA_FOR_API}
     *             - {@see Token::STATE_INVALID_TOKEN}
     *             
     */
    public function getState() : ?int
    {
        return $this->state;
    }
    /**
     * Setter for detailMessage
     *
     * @param string $detailMessage Token state description
     *                              - Valid
     *                              - Off Contract
     *                              - Not applicable for API
     *                              - Invalid
     *                              
     *
     * @return self To use in method chains
     */
    public function setDetailMessage(?string $detailMessage) : self
    {
        $this->detailMessage = $detailMessage;
        return $this;
    }
    /**
     * Getter for detailMessage
     *
     * @return string Token state description
     *                - Valid
     *                - Off Contract
     *                - Not applicable for API
     *                - Invalid
     *                
     */
    public function getDetailMessage() : ?string
    {
        return $this->detailMessage;
    }
    /**
     * Setter for end
     *
     * @param int $end The device's communication end time (in milliseconds since the Unix Epoch)
     *
     * @return self To use in method chains
     */
    public function setEnd(?int $end) : self
    {
        $this->end = $end;
        return $this;
    }
    /**
     * Getter for end
     *
     * @return int The device's communication end time (in milliseconds since the Unix Epoch)
     */
    public function getEnd() : ?int
    {
        return $this->end;
    }
    /**
     * Setter for freeMessages
     *
     * @param int $freeMessages The number of free messages left for this token
     *
     * @return self To use in method chains
     */
    public function setFreeMessages(?int $freeMessages) : self
    {
        $this->freeMessages = $freeMessages;
        return $this;
    }
    /**
     * Getter for freeMessages
     *
     * @return int The number of free messages left for this token
     */
    public function getFreeMessages() : ?int
    {
        return $this->freeMessages;
    }
    /**
     * Setter for freeMessagesSent
     *
     * @param int $freeMessagesSent The number of free messages already sent for this token
     *
     * @return self To use in method chains
     */
    public function setFreeMessagesSent(?int $freeMessagesSent) : self
    {
        $this->freeMessagesSent = $freeMessagesSent;
        return $this;
    }
    /**
     * Getter for freeMessagesSent
     *
     * @return int The number of free messages already sent for this token
     */
    public function getFreeMessagesSent() : ?int
    {
        return $this->freeMessagesSent;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('state' => new PrimitiveSerializer('int'), 'detailMessage' => new PrimitiveSerializer('string'), 'end' => new PrimitiveSerializer('int'), 'freeMessages' => new PrimitiveSerializer('int'), 'freeMessagesSent' => new PrimitiveSerializer('int'));
    }
}