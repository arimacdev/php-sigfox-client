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
    public function getAccessToken() : ?string
    {
        return $this->accessToken;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        return array('accessToken' => new PrimitiveSerializer(self::class, 'accessToken', 'string'));
    }
}