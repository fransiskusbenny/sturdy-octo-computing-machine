<?php

namespace Kongstone\Tmdb\Commands;

use Illuminate\Console\Command;

class TmdbCommand extends Command
{
    public $signature = 'tmdb';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
