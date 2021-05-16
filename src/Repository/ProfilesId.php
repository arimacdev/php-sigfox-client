<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ProfilesIdGet;
use Arimac\Sigfox\Definition\Profile;
class ProfilesId extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * The Profile identifier
     *
     * @internal
     */
    protected ?string $id;
    /**
     * Creating the repository
     *
     * @internal
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
     *
     * @param ProfilesIdGet $request The query and body parameters to pass
     *
     * @return Profile
     */
    public function get(?ProfilesIdGet $request = null) : Profile
    {
        return $this->client->call('get', $this->bind('/profiles/{id}', $this->id), $request, Profile::class);
    }
}