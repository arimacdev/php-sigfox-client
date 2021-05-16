<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class CertificateUpdate extends Definition
{
    /**
     * The certificate name
     *
     * @var string
     */
    protected ?string $key = null;
    /**
     * Setter for key
     *
     * @param string $key The certificate name
     *
     * @return self To use in method chains
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Getter for key
     *
     * @return string The certificate name
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('key' => new PrimitiveSerializer(self::class, 'key', 'string'));
    }
}