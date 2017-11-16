<?php

namespace DevinGray\LaraTeams\Traits;

/**
 * This file is part of Larateams
 *
 * @license MIT
 * @package Teamwork
 */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

/**
 * Trait TeamTrait
 */
trait TeamTrait
{
    /**
     * One-to-Many relation with the invite model
     * @return mixed
     */
    public function invites()
    {
        return $this->hasMany( Config::get('larateams.invite_model'), 'team_id', 'id');
    }

    /**
     * Many-to-Many relations with the user model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(Config::get('larateams.user_model'), Config::get('larateams.team_user_table'), 'team_id','user_id')->withTimestamps();
    }
    /**
     * Has-One relation with the user model.
     * This indicates the owner of the team
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function owner()
    {
        $userModel   = Config::get( 'larateams.user_model' );
        $userKeyName = ( new $userModel() )->getKeyName();
        return $this->hasOne(Config::get('larateams.user_model'), $userKeyName, "owner_id");
    }
    /**
     * Helper function to determine if a user is part
     * of this team
     *
     * @param Model $user
     * @return bool
     */
    public function hasUser( Model $user )
    {
        return $this->users()->where( $user->getKeyName(), "=", $user->getKey() )->first() ? true : false;
    }
}