<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository\GroupsIdCallbacksNotDelivered;
use Arimac\Sigfox\Repository\GroupsIdGeolocPayloads;
class GroupsId
{
    /**
     * The Group identifier
     */
    protected string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Group identifier
     */
    function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return GroupsIdCallbacksNotDelivered
     */
    public function callbacksNotDelivered() : GroupsIdCallbacksNotDelivered
    {
        return new GroupsIdCallbacksNotDelivered($this->id);
    }
    /**
     * @return GroupsIdGeolocPayloads
     */
    public function geolocPayloads() : GroupsIdGeolocPayloads
    {
        return new GroupsIdGeolocPayloads($this->id);
    }
}