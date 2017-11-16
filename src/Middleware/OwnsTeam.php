<?php

namespace DevinGray\LaraTeams\Middleware;

use Closure;

/**
 * Class OwnsTeam
 * @package DevinGray\LaraTeams\Middleware
 */
class OwnsTeam
{
    /**
     * @param          $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}