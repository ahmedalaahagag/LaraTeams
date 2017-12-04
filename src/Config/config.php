<?php

/**
 * This file is part of LaraTeams
 *
 * @license MIT
 * @package LaraTeams
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Auth Model
    |--------------------------------------------------------------------------
    |
    | This is the Auth model used by LaraTeam.
    |
    */
    'user_model' => config('auth.providers.users.model', App\User::class),
    /*
    |--------------------------------------------------------------------------
    | LaraTeam users Table
    |--------------------------------------------------------------------------
    |
    | This is the users table name used by LaraTeam.
    |
    */
    'users_table' => 'users',
    /*
    |--------------------------------------------------------------------------
    | LaraTeam Team Model
    |--------------------------------------------------------------------------
    |
    | This is the Team model used by LaraTeam to create correct relations.  Update
    | the team if it is in a different namespace.
    |
    */
    'team_model' => \DevinGray\LaraTeams\Classes\Team::class,
    /*
    |--------------------------------------------------------------------------
    | LaraTeam teams Table
    |--------------------------------------------------------------------------
    |
    | This is the teams table name used by LaraTeam to save teams to the database.
    |
    */
    'teams_table' => 'teams',
    /*
    |--------------------------------------------------------------------------
    | LaraTeam team_user Table
    |--------------------------------------------------------------------------
    |
    | This is the team_user table used by LaraTeam to save assigned teams to the
    | database.
    |
    */
    'team_user_table' => 'team_user',
    /*
    |--------------------------------------------------------------------------
    | User Foreign key on LaraTeam's team_user Table (Pivot)
    |--------------------------------------------------------------------------
    */
    'user_foreign_key' => 'id',
    /*
    |--------------------------------------------------------------------------
    | LaraTeam Team Invite Model
    |--------------------------------------------------------------------------
    |
    | This is the Team Invite model used by LaraTeam to create correct relations.
    | Update the team if it is in a different namespace.
    |
    */
    'invite_model' => \DevinGray\LaraTeams\Classes\Invite::class,
    /*
    |--------------------------------------------------------------------------
    | LaraTeam team invites Table
    |--------------------------------------------------------------------------
    |
    | This is the team invites table name used by LaraTeam to save sent/pending
    | invitation into teams to the database.
    |
    */
    'team_invites_table' => 'team_invites',

    'default_team_role' => 3, // Member
    'default_owner_role' => 1, // Owner

];
