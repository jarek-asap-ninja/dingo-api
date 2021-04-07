<?php

namespace Dingo\Api\Tests\Stubs;

use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application;

class ApplicationStub extends Container implements Application
{
    public function bootstrapPath($path = '')
    {
        // TODO: Implement bootstrapPath() method.
    }

    public function configPath($path = '')
    {
        // TODO: Implement configPath() method.
    }

    public function databasePath($path = '')
    {
        // TODO: Implement databasePath() method.
    }

    public function resourcePath($path = '')
    {
        // TODO: Implement resourcePath() method.
    }

    public function storagePath()
    {
        // TODO: Implement storagePath() method.
    }

    public function resolveProvider($provider)
    {
        // TODO: Implement resolveProvider() method.
    }

    public function bootstrapWith(array $bootstrappers)
    {
        // TODO: Implement bootstrapWith() method.
    }

    public function getLocale()
    {
        // TODO: Implement getLocale() method.
    }

    public function getNamespace()
    {
        // TODO: Implement getNamespace() method.
    }

    public function getProviders($provider)
    {
        // TODO: Implement getProviders() method.
    }

    public function hasBeenBootstrapped()
    {
        // TODO: Implement hasBeenBootstrapped() method.
    }

    public function loadDeferredProviders()
    {
        // TODO: Implement loadDeferredProviders() method.
    }

    public function setLocale($locale)
    {
        // TODO: Implement setLocale() method.
    }

    public function shouldSkipMiddleware()
    {
        // TODO: Implement shouldSkipMiddleware() method.
    }

    public function terminate()
    {
        // TODO: Implement terminate() method.
    }

    public function version()
    {
        return 'v1';
    }

    public function basePath($path = '')
    {
        //
    }

    public function environment(...$environments)
    {
        return 'testing';
    }

    public function isDownForMaintenance()
    {
        return false;
    }

    public function registerConfiguredProviders()
    {
        //
    }

    public function register($provider, $options = [], $force = false)
    {
        //
    }

    public function runningUnitTests()
    {
        // TODO: Implement runningUnitTests() method.
    }

    public function registerDeferredProvider($provider, $service = null)
    {
        //
    }

    public function getCachedCompilePath()
    {
        //
    }

    public function getCachedServicesPath()
    {
        //
    }

    public function boot()
    {
        //
    }

    public function booting($callback)
    {
        //
    }

    public function booted($callback)
    {
        //
    }

    public function getCachedPackagesPath()
    {
        //
    }

    public function runningInConsole()
    {
        //
    }
}
