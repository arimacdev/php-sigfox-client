<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\OneOf;
/**
 * Retrieve information about a given device.
 */
class DevicesIdGet extends Request
{
    /**
     * if true, we return the list of actions and resources the user has access
     *
     * @var bool
     */
    protected ?bool $authorizations = null;
    /**
     * Defines the other available fields to be returned in the response.
     *
     * @var string
     */
    protected ?string $fields = null;
    /**
     * @internal
     */
    protected array $query = array('authorizations', 'fields');
    /**
     * Setter for authorizations
     *
     * @param bool $authorizations if true, we return the list of actions and resources the user has access
     *
     * @return static To use in method chains
     */
    public function setAuthorizations(?bool $authorizations)
    {
        $this->authorizations = $authorizations;
        return $this;
    }
    /**
     * Getter for authorizations
     *
     * @internal
     *
     * @return bool if true, we return the list of actions and resources the user has access
     */
    public function getAuthorizations() : ?bool
    {
        return $this->authorizations;
    }
    /**
     * Setter for fields
     *
     * @param string $fields Defines the other available fields to be returned in the response.
     *                       
     *
     * @return static To use in method chains
     */
    public function setFields(?string $fields)
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     * Getter for fields
     *
     * @internal
     *
     * @return string Defines the other available fields to be returned in the response.
     *                
     */
    public function getFields() : ?string
    {
        return $this->fields;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('authorizations' => new PrimitiveSerializer('bool'), 'fields' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('fields' => array(new OneOf(array('deviceType(name)', 'group(name,type,level,bssId,customerBssId)', 'contract(name)', 'productCertificate(key)', 'modemCertificate(key)'))));
        return $rules;
    }
}