<?php

namespace JustSteveKing\Laravel\OTPAuth\Tests;

use JustSteveKing\Laravel\OTPAuth\PackageServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
