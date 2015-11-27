<?php namespace Mediakreasi\Api;

use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('mki-api.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app['api'] = $this->app->share (function ($app) 
        {
            return new Api();
        });
    }

    public function provides()
    {
        return [];
    }
}
