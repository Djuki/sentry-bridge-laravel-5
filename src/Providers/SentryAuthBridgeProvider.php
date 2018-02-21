<?php
namespace Djuki\SentryLaravelBridge\Providers;

use User;
use Illuminate\Support\Facades\Auth;
use Djuki\SentryLaravelBridge\Guard\SentryBridgeGuard;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class SentryAuthBridgeProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Auth::extend('sentry', function ($app, $name, array $config) {
            return new SentryBridgeGuard(Auth::createUserProvider($config['provider']));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}