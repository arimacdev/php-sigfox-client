<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class JobError extends Definition
{
    /** ENTITY */
    public const TYPE_ENTITY = 0;
    /** SYSTEM */
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
     * - `JobError::TYPE_ENTITY`
     * - `JobError::TYPE_SYSTEM`
     *
     * @var int
     */
    protected ?int $type = null;
    /**
     * @param string $entity the hex id of the entity that has an error
     */
    function setEntity(?string $entity)
    {
        $this->entity = $entity;
    }
    /**
     * @return string the hex id of the entity that has an error
     */
    function getEntity() : ?string
    {
        return $this->entity;
    }
    /**
     * @param string $message the message of the error
     */
    function setMessage(?string $message)
    {
        $this->message = $message;
    }
    /**
     * @return string the message of the error
     */
    function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * @param int $type Error type
     * - `JobError::TYPE_ENTITY`
     * - `JobError::TYPE_SYSTEM`
     */
    function setType(?int $type)
    {
        $this->type = $type;
    }
    /**
     * @return int Error type
     * - `JobError::TYPE_ENTITY`
     * - `JobError::TYPE_SYSTEM`
     */
    function getType() : ?int
    {
        return $this->type;
    }
}