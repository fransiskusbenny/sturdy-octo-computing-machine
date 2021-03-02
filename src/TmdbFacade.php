<?php

namespace Kongstone\Tmdb;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kongstone\Tmdb\Tmdb
 */
class TmdbFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
