<?php

namespace Soap\LaravelOmise;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soap\LaravelOmise\Commands\LaravelOmiseCommand;

class LaravelOmiseServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-omise')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-omise_table')
            ->hasCommand(LaravelOmiseCommand::class);
    }
}
