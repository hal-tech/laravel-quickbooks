<?php

namespace LaravelQuickbooks;

use Illuminate\Support\ServiceProvider;
use PhpQuickbooks\Quickbooks;

class QuickbooksServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Quickbooks::class, function () {
            return new Quickbooks(
                config('quickbooks.consumer_key'),
                config('quickbooks.consumer_secret'),
                config('quickbooks.access_token'),
                config('quickbooks.access_token_secret'),
                config('quickbooks.customer_id'),
                config('quickbooks.endpoint')
            );
        });

        $this->mergeConfigFrom(
            __DIR__ . '/config/quickbooks.php', 'quickbooks'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config' => config_path('quickbooks'),
        ]);
    }
}