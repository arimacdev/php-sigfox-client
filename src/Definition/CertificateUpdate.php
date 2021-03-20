<?php

namespace Arimac\Sigfox\Definition;

class CertificateUpdate
{
    /**
     * The certificate name
     *
     * @var string
     */
    protected string $key;
    /**
     * @param string key The certificate name
     */
    function setKey(string $key)
    {
        $this->key = $key;
    }
    /**
     * @return string The certificate name
     */
    function getKey() : string
    {
        return $this->key;
    }
}