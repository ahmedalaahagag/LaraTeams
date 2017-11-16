<?php

namespace DevinGray\LaraTeams\Classes;

use DevinGray\LaraTeams\Contracts\TeamsContract;
use DevinGray\LaraTeams\Traits\TeamTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Team
 * @package DevinGray\LaraTeams\Classes
 */
Class Team extends Model implements TeamsContract
{
    use TeamTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;
    /**
     * @var array
     */
    protected $fillable = ['name', 'owner_id'];
    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct( array $attributes = [ ] )
    {
        parent::__construct( $attributes );
        $this->table = \Config::get( 'larateams.teams_table' );
    }
}
