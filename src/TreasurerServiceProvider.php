<?php

namespace Soap\Treasurer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soap\Treasurer\Commands\OmiseCustomersCommand;

class TreasurerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('treasurer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_treasurer_table')
            ->hasCommand(OmiseCustomersCommand::class);
    }
}
