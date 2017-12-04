<?php


namespace DevinGray\LaraTeams\Classes;


use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TeamRole
 * @package DevinGray\LaraTeams\Classes
 */
class TeamRole extends Model
{
    /**
     * @var string
     */
    protected $table = 'team_roles';

    /**
     * @var array
     */
    protected $fillable = ['name', 'label'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}