<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Validator\Rules\Required;
/**
 * Retrieve the product certificate associated with a given device ID and PAC, when the device has not already been
 * created on the portal, only in CRA
 */
class DevicesIdProductCertificate extends Request
{
    /**
     * The device's PAC (hexadecimal format)
     *
     * @var string
     */
    protected ?string $pac = null;
    /**
     * @internal
     */
    protected array $query = array('pac');
    /**
     * Setter for pac
     *
     * @param string $pac The device's PAC (hexadecimal format)
     *
     * @return static To use in method chains
     */
    public function setPac(?string $pac)
    {
        $this->pac = $pac;
        return $this;
    }
    /**
     * Getter for pac
     *
     * @internal
     *
     * @return string The device's PAC (hexadecimal format)
     */
    public function getPac() : ?string
    {
        return $this->pac;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getSerializeMetaData() : array
    {
        $serializers = array('pac' => new PrimitiveSerializer('string'));
        return $serializers;
    }
    /**
     * @inheritdoc
     *
     * @internal
     */
    public function getValidationMetaData() : array
    {
        $rules = array('pac' => array(new Required()));
        return $rules;
    }
}