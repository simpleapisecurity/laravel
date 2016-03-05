<?php

namespace SimpleAPISecurity\Laravel\Providers;

use Illuminate\Support\ServiceProvider;
use SimpleAPISecurity\Laravel\SodiumMessaging;

class MessagingProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('messaging', function () { return new SodiumMessaging(); });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['messaging'];
    }
}
