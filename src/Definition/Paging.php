<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class Paging extends Definition
{
    /**
     * @var string
     */
    protected ?string $next = null;
    /**
     * Setter for next
     *
     * @param string $next
     *
     * @return self To use in method chains
     */
    public function setNext(?string $next) : self
    {
        $this->next = $next;
        return $this;
    }
    /**
     * Getter for next
     *
     * @return string
     */
    public function getNext() : ?string
    {
        return $this->next;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('next' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}