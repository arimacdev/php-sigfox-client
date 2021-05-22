<?php

namespace Arimac\Sigfox;

/**
 * Non fixed sized objects
 */
trait Extendable {
    /**
     * @internal
     * @var array<string,mixed>
     */
    protected array $extendedData = [];

    /**
     * Setting other JSON parameters
     *
     * @param string $key   Property name to be in JSON object
     * @param mixed  $value JSON serializable value
     *
     * @return static For method chains
     */
    public function set(string $key, $value) {
        $this->extendedData[$key] = $value;

        return $this;
    }

    /**
     * Returning all the other properties and values
     *
     * @return array<string,mixed>
     */
    public function getExtendedData():array {
        return $this->extendedData;
    }
}
