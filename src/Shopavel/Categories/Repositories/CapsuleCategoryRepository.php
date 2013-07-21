<?php namespace Shopavel\Categories\Repositories;

use Shopavel\Products\Repositories\CapsuleProductRepository;

class CapsuleCategoryRepository implements CategoryRepositoryInterface {

    /**
     * Capsule query builder.
     * 
     * @var Capsule
     */
    protected $capsule;

    /**
     * Products capsule repository.
     * 
     * @var CapsuleProductRepository
     */
    protected $products;

    /**
     * Create the capsules.
     * 
     * @param Capsule                  $capsule
     * @param CapsuleProductRepository $products
     */
    public function __construct(Capsule $capsule, CapsuleProductRepository $products)
    {
        $this->capsule = $capsule;
        $this->products = $products;
    }

    /**
     * Inject the category_product pivot table and return the products query.
     * 
     * @param  int $category_id
     * @return CapsuleProductRepository
     */
    public function products($category_id)
    {
        $query = $this->products->query()->join('category_product', 'category_product.category_id', '=', $category_id,
            'right')->select('products.*');

        $this->products->setQuery($query);

        return $this->products->query();
    }

}