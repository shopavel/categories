Categories package for Shopavel
===============================

Usage
-----

### Model

```php
use Shopavel\Categories\Category;

$category = Category::find(1);

foreach ($category->products() as $product)
{
    // ...
}

```


### Facade

You can use the facade to access the repository methods:

```php
Category::products($category_id);
```

You can alter the query using methods from the product repository, and other default query builder methods:

```php
Category::products($category_id)->bestselling()->take(10);
```


License
-------

All Shopavel packages are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)