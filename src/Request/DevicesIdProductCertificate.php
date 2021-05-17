<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Request;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
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
     * @internal
     */
    protected array $validations = array('pac' => array('required'));
    /**
     * Setter for pac
     *
     * @param string $pac The device's PAC (hexadecimal format)
     *
     * @return self To use in method chains
     */
    public function setPac(?string $pac) : self
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
}