<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\ApiUserCreation;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Create a new API user.
 */
class ApiUsersCreate extends Request
{
    /**
     * @var ApiUserCreation
     */
    protected ?ApiUserCreation $apiUser = null;
    protected array $body = array('apiUser');
    protected array $validations = array('apiUser' => array('required'));
    /**
     * Setter for apiUser
     *
     * @param ApiUserCreation $apiUser
     *
     * @return self To use in method chains
     */
    public function setApiUser(?ApiUserCreation $apiUser) : self
    {
        $this->apiUser = $apiUser;
        return $this;
    }
    /**
     * Getter for apiUser
     *
     * @return ApiUserCreation
     */
    public function getApiUser() : ?ApiUserCreation
    {
        return $this->apiUser;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('apiUser' => new ClassSerializer(self::class, 'apiUser', ApiUserCreation::class));
    }
}