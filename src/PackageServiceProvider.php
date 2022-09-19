<?php

namespace JustSteveKing\Laravel\OTPAuth;

use JustSteveKing\Laravel\OTPAuth\Contracts\GeneratorContract;
use JustSteveKing\Laravel\OTPAuth\Generators\OneTimePasswordGenerator;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider as SpatieServiceProvider;

final class PackageServiceProvider extends SpatieServiceProvider
{
    public array $bindings = [
        GeneratorContract::class => OneTimePasswordGenerator::class,
    ];

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-otp-auth')
            ->hasConfigFile()
            ->hasViews();
    }
}
