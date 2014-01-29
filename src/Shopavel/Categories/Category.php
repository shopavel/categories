<?php namespace Shopavel\Categories;

use Shopavel\NestedSets\Node;
use Shopavel\Categories\Repositories\CategoryRepositoryInterface;

class Category extends Node implements CategoryInterface {

    use EntityContainer;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'categories';

    /**
     * The repository used by the model.
     *
     * @var CategoryRepositoryInterface
     */
    protected $repository;

    /**
     * Create the model and add the repository
     *
     * @param array                       $attributes
     * @param CategoryRepositoryInterface $repository
     */
    public function __construct(array $attributes = array(), CategoryRepositoryInterface $repository)
    {
        parent::__construct($attributes);
        $this->repository = $repository;
    }

    /**
     * Get the products assigned to this category
     *
     * @return Shopavel\Products\Repositories\CapsuleProductRepository
     */
    public function products()
    {
        return $this->repository->products($this->id);
    }

}
