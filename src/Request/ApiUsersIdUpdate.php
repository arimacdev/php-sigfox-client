<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Definition\ApiUserEdition;
use Arimac\Sigfox\Serializer\ClassSerializer;
/**
 * Update information about a given API user.
 * 
 */
class ApiUsersIdUpdate extends Definition
{
    /**
     * The information to update
     *
     * @var ApiUserEdition
     */
    protected ?ApiUserEdition $apiUser = null;
    protected $serialize = array(new ClassSerializer(self::class, 'apiUser', ApiUserEdition::class));
    protected $body = array('apiUser');
    protected $validations = array('apiUser' => array('required'));
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
}