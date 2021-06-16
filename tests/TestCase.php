<?php

namespace Cares0107\ExemplePackage\Tests;

use Binaryk\LaravelRestify\Tests\Fixtures\User\User;
use Cares0107\ExemplePackage\ExemplePackageServiceProvider;
use CreateExempleTable;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
        Route::exemple();
        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Cares0107\\ExemplePackage\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ExemplePackageServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'sqlite');

        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        include_once __DIR__ . '/../database/migrations/create_exemple_table.php';
        (new CreateExempleTable())->up();
    }
}
