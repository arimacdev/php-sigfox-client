<?php

namespace Arimac\Sigfox;

class Request extends Model {
    /**
     * @internal
     */
    protected ?string $body = null;

    /**
     * @internal
     */
    protected array $query = [];

    /**
     * Returning the body property name
     *
     * @internal
     *
     * @return string|null
     */
    public function getBodyField(): ?string {
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
}
