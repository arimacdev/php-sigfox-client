<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\ApiUserCreation;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Create a new API user.
 */
class ApiUsersCreate extends Request
{
    /**
     * @var ApiUserCreation
     */
    protected ?ApiUserCreation $apiUser = null;
    /**
     * @internal
     */
    protected ?string $body = 'apiUser';
    /**
     * Setter for apiUser
     *
     * @param ApiUserCreation $apiUser
     *
     * @return static To use in method chains
     */
    public function setApiUser(?ApiUserCreation $apiUser)
    {
        $this->apiUser = $apiUser;
        return $this;
    }
    /**
     * Getter for apiUser
     *
     * @internal
     *
     * @return ApiUserCreation
     */
    public function getApiUser() : ?ApiUserCreation
    {
        return $this->apiUser;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('apiUser' => new ClassSerializer(ApiUserCreation::class));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('apiUser' => array(new Required(), new Child()));
        return $rules;
    }
}