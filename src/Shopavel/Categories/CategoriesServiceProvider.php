<?php namespace Shopavel\Categories;

use Illuminate\Support\ServiceProvider;

class CategoriesServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('shopavel/categories');

        $this->app->bind('Shopavel\Categories\Repositories\CategoryRepositoryInterface',
            'Shopavel\Categories\Repositories\CapsuleCategoryRepository');

        $this->app['categories'] = $this->app->share(function($app)
        {
            if ($repository = $this->app['Shopavel\Categories\Repositories\CategoryRepositoryInterface'])
            {
                return new $repository;
            }
            else
            {
                throw new \Exception("No repository available for categories.");
            }
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('categories');
    }

}