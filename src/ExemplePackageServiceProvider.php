<?php

namespace Cares0107\ExemplePackage;

use Cares0107\ExemplePackage\Commands\ExemplePackageCommand;
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
            ->hasMigration('create_exemple-package_table')
            ->hasCommand(ExemplePackageCommand::class);
    }
}
