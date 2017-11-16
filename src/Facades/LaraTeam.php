<?php
namespace DevinGray\LaraTeams\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class LaraTeam
 * @package DevinGray\LaraTeams\Facades
 */
class LaraTeam extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'larateams';
    }

}