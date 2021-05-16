<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Definition\ApiUserEdition;
use Arimac\Sigfox\Serializer\ClassSerializer;
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
    protected array $body = array('apiUser');
    protected array $validations = array('apiUser' => array('required'));
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
     * @return ApiUserEdition The information to update
     */
    public function getApiUser() : ?ApiUserEdition
    {
        return $this->apiUser;
    }
    /**
     * @inheritdoc
     */
    public function getSerializeMetaData() : array
    {
        return array('apiUser' => new ClassSerializer(self::class, 'apiUser', ApiUserEdition::class));
    }
}