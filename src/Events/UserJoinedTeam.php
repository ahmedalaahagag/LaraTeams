<?php
namespace DevinGray\LaraTeams\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class UserJoinedTeam
 * @package DevinGray\LaraTeams\Events
 */
class UserJoinedTeam
{
    use SerializesModels;

    /**
     * @var
     */
    protected $user;

    /**
     * @var
     */
    protected $team_id;

    /**
     * UserJoinedTeam constructor.
     *
     * @param $user
     * @param $team_id
     */
    public function __construct($user, $team_id)
    {
        $this->user = $user;
        $this->team_id = $team_id;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

}