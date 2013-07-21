<?php namespace Shopavel\Categories\Facades;

use Illuminate\Support\Facades\Facade;

class Category extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return  string
     */
    protected static function getFacadeAccessor() { return 'categories'; }

}