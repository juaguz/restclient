<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 22/03/16
 * Time: 17:52
 */

namespace JuaGuz\RestClient\Providers;
use JuaGuz\RestClient\RestClient;


class RestClientServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('restclient', function($app)
        {
            return new RestClient();
        });



    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {

    }
}