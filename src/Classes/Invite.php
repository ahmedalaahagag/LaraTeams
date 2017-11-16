<?php


namespace DevinGray\LaraTeams\Classes;


use DevinGray\LaraTeams\Traits\TeamInviteTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Invite
 * @package DevinGray\LaraTeams\Classes
 */
class Invite extends Model
{
    use TeamInviteTrait;

    /**
     * @var
     */
    protected $table;

    /**
     * Invite constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [ ] )
    {
        parent::__construct( $attributes );
        $this->table = Config::get( 'larateams.team_invites_table' );
    }
}