<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ProfilesIdGet;
use Arimac\Sigfox\Definition\Profile;
class ProfilesId
{
    /**
     * The HTTP client
     */
    protected ?Client $client;
    /**
     * The Profile identifier
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @param Client $client The HTTP client
     * @param string $id     The Profile identifier
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }
    /**
     * Retrieve information about a given profile.
     */
    public function get(ProfilesIdGet $request) : Profile
    {
        return $this->client->request('get', $this->bind('/profiles/{id}', $this->id), $request, Profile::class);
    }
}