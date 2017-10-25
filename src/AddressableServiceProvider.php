<?php namespace Ixudra\Addressable;


use Illuminate\Support\ServiceProvider;

class AddressableServiceProvider extends ServiceProvider {

    protected $defer = false;


    public function register()
    {
        // Publish configuration files
        $this->mergeConfigFrom( __DIR__ .'/config/addressable.php', 'addressable' );

        $this->publishes(array(
            __DIR__ .'/config/addressable.php'          => config_path('addressable.php'),
        ), 'config');
    }


    public function boot()
    {
        $this->loadTranslationsFrom( __DIR__ .'/resources/lang', 'addressable' );
        $this->loadViewsFrom( __DIR__ .'/resources/views', 'addressable' );


        // Publish language files
        $this->publishes(array(
            __DIR__ .'/resources/lang'                  => base_path('resources/lang'),
        ), 'lang');


        // Publish views
        $this->publishes(array(
            __DIR__ .'/resources/views'                 => base_path('resources/views/bootstrap'),
        ), 'views');


        $this->publishes(array(
            __DIR__ .'/database/migrations/'            => base_path('database/migrations')
        ), 'migrations');
    }

    public function provides()
    {
        return array('Addressable');
    }

}
