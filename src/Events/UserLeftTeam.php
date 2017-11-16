<?php


namespace DevinGray\LaraTeams\Events;


use Illuminate\Queue\SerializesModels;

/**
 * Class UserLeftTeam
 * @package DevinGray\LaraTeams\Events
 */
class UserLeftTeam
{
    use SerializesModels;
    /**
     * @type \Illuminate\Database\Eloquent\Model
     */
    protected $user;
    /**
     * @type int
     */
    protected $team_id;

    /**
     * UserLeftTeam constructor.
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