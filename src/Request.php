<?php

namespace Arimac\Sigfox;

abstract class Request extends Definition {
    protected array $body = [];

    protected array $query = [];

    /**
     * Returning all property names for request body
     *
     * @return string[]
     */
    public function getBodyFields(): array {
        return $this->body;
    }

    /**
     * Returning all property names for query string
     *
     * @return string[]
     */
    public function getQueryFields(): array {
        return $this->query;
    }

    /**
     * @inheritdoc
     */
    public abstract function getSerializeMetaData(): array;
}
