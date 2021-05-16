<?php

namespace Arimac\Sigfox;

abstract class Request extends Definition {
    /**
     * @internal
     */
    protected array $body = [];

    /**
     * @internal
     */
    protected array $query = [];

    /**
     * Returning all property names for request body
     *
     * @internal
     *
     * @return string[]
     */
    public function getBodyFields(): array {
        return $this->body;
    }

    /**
     * Returning all property names for query string
     *
     * @internal
     *
     * @return string[]
     */
    public function getQueryFields(): array {
        return $this->query;
    }

    /**
     * @internal
     *
     * @inheritdoc
     */
    public abstract function getSerializeMetaData(): array;
}
