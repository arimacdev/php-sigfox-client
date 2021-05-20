<?php

namespace Arimac\Sigfox\Response\Paginated;

use Iterator;

/**
 * Iterator over items in pagination response.
 *
 * This iterator will automatically calling the next page endpoint
 * and filling data after iterated to the end of fetched data.
 *
 * @template T
 *
 * @template-implements Iterator<T>
 */
class ItemIterator implements Iterator {
    /**
     * @internal
     */
    protected Iterator $parent;

    /**
     * @internal
     */
    protected $position = 0;

    /**
     * @internal
     */
    protected $key = 0;

    /**
     * @internal
     */
    protected array $array;

    /**
     * @internal
     */
    protected bool $isValid;

    /**
     * Initializing the iterator from a PageIterator
     *
     * @internal
     */
    public function __construct(Iterator $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Skipping empty arrays
     *
     * @internal
     */
    private function skipEmpty(){
        if(empty($this->parent->current())){
            $this->parent->next();
            $valid = $this->parent->valid();
            if($valid){
                $this->skipEmpty();
            }
        }
    }

    /**
     * @inheritdoc
     *
     * @internal
     */
    public function rewind() {
        $this->position = 0;
        $this->key = 0;

        $this->parent->rewind();
        $this->skipEmpty();
        $this->isValid = $this->parent->valid();
        if($this->isValid){
            $this->array = $this->parent->current();
        }
    }

    /**
     * @inheritdoc
     *
     * @return T
     */
    public function current() {
        return $this->array[$this->position];
    }

    /**
     * @inheritdoc
     *
     * @return int
     */
    public function key() {
        return $this->key;
    }

    /**
     * @inheritdoc
     *
     * @internal
     */
    public function next() {
        $this->key++;
        if(isset($this->array[$this->position+1])){
            $this->position++;
        } else {
            $this->parent->next();
            $this->skipEmpty();
            $this->isValid = $this->parent->valid();
            if($this->isValid){
                $this->position = 0;
                $this->array = $this->parent->current();
                $this->isValid = !empty($this->array);
            }
        }
    }

    /**
     * @inheritdoc
     *
     * @internal
     */
    public function valid() {
        return $this->isValid;
    }
}
