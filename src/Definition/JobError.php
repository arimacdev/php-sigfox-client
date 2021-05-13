<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class JobError extends Definition
{
    /**
     * ENTITY
     */
    public const TYPE_ENTITY = 0;
    /**
     * SYSTEM
     */
    public const TYPE_SYSTEM = 1;
    /**
     * the hex id of the entity that has an error
     *
     * @var string
     */
    protected ?string $entity = null;
    /**
     * the message of the error
     *
     * @var string
     */
    protected ?string $message = null;
    /**
     * Error type
     * 
     * - {@see JobError::TYPE_ENTITY}
     * - {@see JobError::TYPE_SYSTEM}
     *
     * @var int
     */
    protected ?int $type = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'entity', 'string'), new PrimitiveSerializer(self::class, 'message', 'string'), new PrimitiveSerializer(self::class, 'type', 'int'));
    /**
     * Setter for entity
     *
     * @param string $entity the hex id of the entity that has an error
     *
     * @return self To use in method chains
     */
    public function setEntity(?string $entity) : self
    {
        $this->entity = $entity;
        return $this;
    }
    /**
     * Getter for entity
     *
     * @return string the hex id of the entity that has an error
     */
    public function getEntity() : string
    {
        return $this->entity;
    }
    /**
     * Setter for message
     *
     * @param string $message the message of the error
     *
     * @return self To use in method chains
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * Getter for message
     *
     * @return string the message of the error
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * Setter for type
     *
     * @param int $type Error type
     *                  
     *                  - {@see JobError::TYPE_ENTITY}
     *                  - {@see JobError::TYPE_SYSTEM}
     *                  
     *
     * @return self To use in method chains
     */
    public function setType(?int $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Getter for type
     *
     * @return int Error type
     *             
     *             - {@see JobError::TYPE_ENTITY}
     *             - {@see JobError::TYPE_SYSTEM}
     *             
     */
    public function getType() : int
    {
        return $this->type;
    }
}