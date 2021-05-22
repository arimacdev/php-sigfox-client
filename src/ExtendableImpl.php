<?php

namespace Arimac\Sigfox;

/**
 * All extendable models must implement this
 */
interface ExtendableImpl {
    /**
     * Setting other JSON parameters
     *
     * @param string $key   Property name to be in JSON object
     * @param mixed  $value JSON serializable value
     *
     * @return static For method chains
     */
    public function set(string $key, $value);

    /**
     * Returning all the other properties and values
     *
     * @internal
     *
     * @return array
     */
    public function getExtendedData():array;
}
