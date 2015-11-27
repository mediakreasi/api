<?php namespace Mediakreasi\Api;

use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    protected $defer = true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $app = $this->app;
           
        $this->app->singleton('api', function ($app) {
            return new Api();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;
        
        $app['api'] = $app->share(function ($app) {
            return new Api();
        });

        $app->alias('api', 'Mediakreasi\Api');
    }
}
