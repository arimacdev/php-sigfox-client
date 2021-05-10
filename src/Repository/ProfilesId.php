<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Request\ProfilesIdGet;
class ProfilesId
{
    /**
     * The Profile identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param string $id The Profile identifier
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    /**
     * Retrieve information about a given profile.
     * 
     */
    public function get(ProfilesIdGet $request) : int
    {
        return $this->client->request('get', $this->bindUrlParams('/profiles/{id}', $this->id), $request, 'int');
    }
}