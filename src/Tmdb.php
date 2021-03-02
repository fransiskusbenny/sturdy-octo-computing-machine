<?php

namespace Kongstone\Tmdb;

use Illuminate\Support\Facades\Http;

class Tmdb
{
    public function get()
    {
    }

    public static function trending()
    {
        return Http::get('https://api.themoviedb.org/3/trending/movie/week', [
                'api_key' => 'd9a970a658653d28ebb7be91147852f7',
            ])
            ->json('results');
    }
}
