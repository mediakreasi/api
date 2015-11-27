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
        
    }

    public function register()
    {
        $this->app->singleton('api', function ($api) {
            return new Api($api['url']);
        });
    }

    public function provides()
    {
        return ['api'];
    }
}
