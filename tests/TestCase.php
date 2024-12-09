<?php

namespace Soap\Treasurer\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Soap\Treasurer\TreasurerServiceProvider;
use Spatie\LaravelRay\RayServiceProvider;

class TestCase extends Orchestra
{
    protected $loadEnvironmentVariables = true;

    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Soap\\Treasurer\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            TreasurerServiceProvider::class,
            RayServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // not work yet
        $app->loadEnvironmentFrom('.env.testing');

        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-omise_table.php.stub';
        $migration->up();
        */
    }
}
