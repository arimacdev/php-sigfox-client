<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Model\ApiUserEdition;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Rules\Child;
/**
 * Update information about a given API user.
 */
class ApiUsersIdUpdate extends Request
{
    /**
     * The information to update
     *
     * @var ApiUserEdition
     */
    protected ?ApiUserEdition $apiUser = null;
    /**
     * @internal
     */
    protected array $body = array('apiUser');
    /**
     * Setter for apiUser
     *
     * @param ApiUserEdition $apiUser The information to update
     *
     * @return self To use in method chains
     */
    public function setApiUser(?ApiUserEdition $apiUser) : self
    {
        $this->apiUser = $apiUser;
        return $this;
    }
    /**
     * Getter for apiUser
     *
     * @internal
     *
     * @return ApiUserEdition The information to update
     */
    public function getApiUser() : ?ApiUserEdition
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
        $serializers = array('apiUser' => new ClassSerializer(ApiUserEdition::class));
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