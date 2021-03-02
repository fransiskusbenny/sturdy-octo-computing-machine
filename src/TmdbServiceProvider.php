<?php

namespace Kongstone\Tmdb;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kongstone\Tmdb\Commands\TmdbCommand;

class TmdbServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tmdb')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_sturdy_octo_computing_machine_table')
            ->hasCommand(TmdbCommand::class);
    }
}
