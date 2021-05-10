<?php

namespace Arimac\Sigfox\Request;

use Arimac\Sigfox\Definition;
/**
 * Retrieve the product certificate associated with a given device ID and PAC, when the device has not already been
 * created on the portal, only in CRA
 * 
 */
class DevicesIdProductCertificate extends Definition
{
    /**
     * The device's PAC (hexadecimal format)
     *
     * @var string
     */
    protected ?string $pac = null;
    protected $query = array('pac');
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
}