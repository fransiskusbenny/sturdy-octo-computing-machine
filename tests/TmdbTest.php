<?php

namespace Kongstone\Tmdb\Tests;

use Illuminate\Support\Facades\Http;
use Kongstone\Tmdb\TmdbFacade;

class TmdbTest extends TestCase
{
    /** @test */
    public function it_can_get_list_of_trending_movies()
    {
        Http::fake(
            fn ($request) =>
            Http::response([
                'results' => [
                    ['id' => 11],
                    ['id' => 12],
                ],
            ])
        );

        $movies = TmdbFacade::trending()->get();

        $this->assertArrayHasKey('id', $movies[0]);
        $this->assertTrue(count($movies) > 0);
    }
}
