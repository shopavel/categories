Categories package for Shopavel
===============================

Configuration
-------------

### Facade

```php
'aliases' => array(
    ...
    'Categories' => 'Shopavel\Categories\Facades\Categories',
);
```


Usage
-----

### Category

```php
use Shopavel\Categories\Category;

$category = Category::find(1);

foreach ($category->products() as $product)
{
    // ...
}

```


### Categories

You can use the facade to access the repository methods:

```php
// Returns a products repository restricted to those within the category
Categories::products($category_id);
```

You can alter the query using methods from the product repository, and other default query builder methods:

```php
Categories::products($category_id)->bestselling()->take(10);
```


License
-------

All Shopavel packages are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)