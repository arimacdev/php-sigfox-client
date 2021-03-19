<?php

namespace Arimac\Sigfox\Definition;

use Arimac\Sigfox\Definition\CommonApiUser;
use Arimac\Sigfox\Definition\MinGroup;
use Arimac\Sigfox\Definition\MinProfile;
use Arimac\Sigfox\Definition\Actions;
use Arimac\Sigfox\Definition\Resources;
/**
 * Defines the API user properties
 */
class ApiUser extends CommonApiUser
{
    /** @var MinGroup */
    protected MinGroup $group;
    /**
     * The creation time since epoch
     *
     * @var int
     */
    protected int $creationTime;
    /**
     * The API user identifier
     *
     * @var string
     */
    protected string $id;
    /**
     * The API user access token (password)
     *
     * @var string
     */
    protected string $accessToken;
    /** @var MinProfile[] */
    protected array $profiles;
    /** @var Actions */
    protected Actions $actions;
    /** @var Resources */
    protected Resources $resources;
}