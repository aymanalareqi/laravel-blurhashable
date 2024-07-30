<?php

namespace Alareqi\LaravelBlurhashable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alareqi\LaravelBlurhashable\Commands\LaravelBlurhashableCommand;

class LaravelBlurhashableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-blurhashable');
    }
}
