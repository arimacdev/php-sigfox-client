<?php

namespace Arimac\Sigfox\Response\Generated;

use Arimac\Sigfox\Model;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class ApiUsersIdRenewCredentialResponse extends Model
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
     * @internal
     *
     * @param string $accessToken The new API user's acces token (password)
     *
     * @return static To use in method chains
     */
    public function setAccessToken(?string $accessToken)
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
        $serializers = array('accessToken' => new PrimitiveSerializer('string'));
        return $serializers;
    }
}