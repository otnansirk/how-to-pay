<?php

namespace Krisn\HowToPay;

use Illuminate\Support\ServiceProvider;
use Krisn\HowToPay\Repositories\HowToPay;


class HowToPayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('howtopay', function () {
            return new HowToPay();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/howtopay/banks/icons')
        ], 'public');
    }
}
