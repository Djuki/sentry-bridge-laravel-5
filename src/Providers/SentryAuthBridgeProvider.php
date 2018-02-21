<?php
namespace Djuki\SentryLaravelBridge\Providers;

use User;
use App\Auth\CustomUserProvider;
use Illuminate\Support\ServiceProvider;

class SentryAuthBridgeProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['auth']->extend('sentry',function()
        {
            return new SentryUserProvider(new User);
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