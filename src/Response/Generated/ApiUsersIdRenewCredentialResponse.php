<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class ApiUsersIdRenewCredentialResponse extends Definition
{
    /**
     * The new API user's acces token (password)
     *
     * @var string
     */
    protected ?string $accessToken = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'accessToken', 'string'));
    /**
     * Setter for accessToken
     *
     * @param string $accessToken The new API user's acces token (password)
     *
     * @return self To use in method chains
     */
    public function setAccessToken(?string $accessToken) : self
    {
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     * Getter for accessToken
     *
     * @return string The new API user's acces token (password)
     */
    public function getAccessToken() : string
    {
        return $this->accessToken;
    }
}