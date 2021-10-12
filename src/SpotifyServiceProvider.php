<?php

namespace Zhyltix\Spotify;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Zhyltix\Spotify\Commands\SpotifyCommand;

class SpotifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravelspotify')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravelspotify_table')
            ->hasCommand(SpotifyCommand::class);
    }
}
