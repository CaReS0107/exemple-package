<?php

namespace Cares0107\ExemplePackage;

use Binaryk\LaravelRestify\Http\Controllers\AuthController;
use Binaryk\LaravelRestify\Http\Middleware\EnsureJsonApiHeaderMiddleware;
use Cares0107\ExemplePackage\Commands\ExemplePackageCommand;
use Cares0107\ExemplePackage\Http\Controllers\MyPackageController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExemplePackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('exemple-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_exemple_table')
            ->hasCommand(ExemplePackageCommand::class);

    }

    protected function authRoutes(): void
    {
        Route::macro('exemple', function (string $prefix = null) {
            Route::prefix($prefix)->group( function () {
                Route::get('/', [MyPackageController::class, 'index']);
            });
        });
    }

    public function boot()
    {
        $this->authRoutes();
    }
}
