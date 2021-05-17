<?php

namespace Arimac\Sigfox;

/**
 * Non fixed sized objects
 */
trait Extendable {
    /**
     * @internal
     */
    protected array $extendedData = [];

    /**
     * Setting other JSON parameters
     *
     * @param string $key   Property name to be in JSON object
     * @param mixed  $value JSON serializable value
     *
     * @return self For method chains
     */
    public function set(string $key, $value): self {
        $this->extendedData[$key] = $value;

        return $this;
    }

    /**
     * Returning all the other properties and values
     *
     * @internal
     *
     * @return array
     */
    public function getExtendedData():array {
        return $this->extendedData;
    }
}
