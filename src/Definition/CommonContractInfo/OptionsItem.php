<?php

namespace Arimac\Sigfox\Definition\CommonContractInfo;

use Arimac\Sigfox\Definition;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
class OptionsItem extends Definition
{
    /**
     * The premium option id (messageHistory, payloadEncryption, geolocation, cognition, testFrames, networkMetadata,
     * satellite)
     *
     * @var string
     */
    protected ?string $id = null;
    /**
     * The parameters of the premium options. The available parameters are the following:
     * payloadEncryption:
     * level: 0 (DEVICE_TO_SIGFOX_CLOUD, default), 1 (END_TO_END), 2 (CUSTOMER)
     * secureStorage: true or false (default)
     * geolocation:
     * level: 1 (ATLAS, default), 2 (ATLAS_WIFI), 4 (ATLAS_POV), 5 (ATLAS_BUBBLE), 6 (ATLAS_WIFI_PRIVATEDB)
     * cognition:
     * level: 0 (MONARCH, default)
     * testFrames:
     * nb: 1 - 25 (default=1)
     * duration (in months): 0 (illimited, default) or number of months
     * networkMetadata:
     * (none)
     * messageHistory:
     * duration: 0 (3 days), 1 (30 days)
     * satellite:
     * (none)
     *
     * @var array
     */
    protected ?array $parameters = null;
    protected $serialize = array(new PrimitiveSerializer(self::class, 'id', 'string'), new PrimitiveSerializer(self::class, 'parameters', 'array'));
    /**
     * Setter for id
     *
     * @param string $id The premium option id (messageHistory, payloadEncryption, geolocation, cognition,
     *                   testFrames, networkMetadata, satellite)
     *
     * @return self To use in method chains
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Getter for id
     *
     * @return string The premium option id (messageHistory, payloadEncryption, geolocation, cognition, testFrames,
     *                networkMetadata, satellite)
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Setter for parameters
     *
     * @param array $parameters The parameters of the premium options. The available parameters are the following:
     *                          payloadEncryption:
     *                            level: 0 (DEVICE_TO_SIGFOX_CLOUD, default), 1 (END_TO_END), 2 (CUSTOMER)
     *                            secureStorage: true or false (default)
     *                          geolocation:
     *                            level: 1 (ATLAS, default), 2 (ATLAS_WIFI), 4 (ATLAS_POV), 5 (ATLAS_BUBBLE), 6
     *                          (ATLAS_WIFI_PRIVATEDB)
     *                          cognition:
     *                            level: 0 (MONARCH, default)
     *                          testFrames:
     *                            nb: 1 - 25 (default=1)
     *                            duration (in months): 0 (illimited, default) or number of months
     *                          networkMetadata:
     *                            (none)
     *                          messageHistory:
     *                            duration: 0 (3 days), 1 (30 days)
     *                          satellite:
     *                            (none)
     *                          
     *
     * @return self To use in method chains
     */
    public function setParameters(?array $parameters) : self
    {
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * Getter for parameters
     *
     * @return array The parameters of the premium options. The available parameters are the following:
     *               payloadEncryption:
     *                 level: 0 (DEVICE_TO_SIGFOX_CLOUD, default), 1 (END_TO_END), 2 (CUSTOMER)
     *                 secureStorage: true or false (default)
     *               geolocation:
     *                 level: 1 (ATLAS, default), 2 (ATLAS_WIFI), 4 (ATLAS_POV), 5 (ATLAS_BUBBLE), 6
     *               (ATLAS_WIFI_PRIVATEDB)
     *               cognition:
     *                 level: 0 (MONARCH, default)
     *               testFrames:
     *                 nb: 1 - 25 (default=1)
     *                 duration (in months): 0 (illimited, default) or number of months
     *               networkMetadata:
     *                 (none)
     *               messageHistory:
     *                 duration: 0 (3 days), 1 (30 days)
     *               satellite:
     *                 (none)
     *               
     */
    public function getParameters() : array
    {
        return $this->parameters;
    }
}