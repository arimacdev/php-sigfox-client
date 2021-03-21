<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition;
class CertificateUpdate extends Definition
{
    /**
     * The certificate name
     *
     * @var string
     */
    protected ?string $key = null;
    /**
     * @param string $key The certificate name
     */
    function setKey(?string $key)
    {
        $this->key = $key;
    }
    /**
     * @return string The certificate name
     */
    function getKey() : ?string
    {
        return $this->key;
    }
}