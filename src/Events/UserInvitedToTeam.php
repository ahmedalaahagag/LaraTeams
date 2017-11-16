<?php


namespace DevinGray\LaraTeams\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class UserInvitedToTeam
 * @package DevinGray\LaraTeams\Events
 */
class UserInvitedToTeam
{
    use SerializesModels;
    /**
     * @type \Illuminate\Database\Eloquent\Model
     */
    protected $invite;

    /**
     * UserInvitedToTeam constructor.
     *
     * @param $invite
     */
    public function __construct($invite)
    {
        $this->invite = $invite;
    }
    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getInvite()
    {
        return $this->invite;
    }
    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->invite->team_id;
    }
}