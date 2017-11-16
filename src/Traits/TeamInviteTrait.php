<?php
 namespace DevinGray\LaraTeams\Traits;

 /**
  * This file is part of Teamwork
  *
  * @license MIT
  * @package Teamwork
  */

 use Illuminate\Support\Facades\Config;

 /**
  * Trait TeamInviteTrait
  * @package DevinGray\LaraTeams\Traits
  */
 trait TeamInviteTrait
 {
     /**
      * Has-One relations with the team model.
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
      */
     public function team()
     {
         return $this->hasOne( Config::get( 'larateams.team_model' ), 'id', 'team_id' );
     }
     /**
      * Has-One relations with the user model.
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
      */
     public function user()
     {
         return $this->hasOne( Config::get( 'larateams.user_model' ), 'email', 'email' );
     }
     /**
      * Has-One relations with the user model.
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
      */
     public function inviter()
     {
         return $this->hasOne( Config::get( 'larateams.user_model' ), 'id', 'user_id' );
     }
 }