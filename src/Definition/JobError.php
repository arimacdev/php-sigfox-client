<?php

namespace Arimac\Sigfox\Definition;

class JobError
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
    protected string $entity;
    /**
     * the message of the error
     *
     * @var string
     */
    protected string $message;
    /**
     * Error type
     * - `JobError::TYPE_ENTITY`
     * - `JobError::TYPE_SYSTEM`
     *
     * @var int
     */
    protected int $type;
}