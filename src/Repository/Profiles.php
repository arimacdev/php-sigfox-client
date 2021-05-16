<?php

namespace Arimac\Sigfox\Repository;

use Arimac\Sigfox\Repository;
use Arimac\Sigfox\Client\Client;
use Arimac\Sigfox\Request\ProfilesList;
use Arimac\Sigfox\Response\Generated\ProfilesListResponse;
class Profiles extends Repository
{
    /**
     * The HTTP client
     *
     * @internal
     */
    protected ?Client $client;
    /**
     * Creating the repository
     *
     * @internal
     *
     * @param Client $client The HTTP client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    /**
     * Retrieve a list of a Group's profiles according to visibility permissions and request filters.
     *
     * @param ProfilesList $request The query and body parameters to pass
     *
     * @return ProfilesListResponse
     */
    public function list(ProfilesList $request) : ProfilesListResponse
    {
        return $this->client->call('get', '/profiles/', $request, ProfilesListResponse::class);
    }
    /**
     * Find by id
     *
     * @param string $id The Profile identifier
     *
     * @return ProfilesId
     */
    public function find(string $id) : ProfilesId
    {
        return new ProfilesId($this->client, $id);
    }
}