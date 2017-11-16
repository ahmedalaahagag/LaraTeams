<?php


namespace DevinGray\LaraTeams\Exceptions;

use RuntimeException;

/**
 * Class UserNotInTeamException
 * @package DevinGray\LaraTeams\Exceptions
 */
class UserNotInTeamException extends RuntimeException
{
    /**
     * @var string
     */
    protected $team;

    /**
     * Set the team
     *
     * @param $team
     *
     * @return $this
     */
    public function setTeam($team)
    {
        $this->team = $team;
        $this->message = "User is not in the team {$team}";
        return $this;
    }

    /**
     * Get the team
     *
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }
}