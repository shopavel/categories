<?php namespace Shopavel\Categories;

use Eloquent;
use Shopavel\Categories\Repositories\CategoryRepositoryInterface;

class Category extends Eloquent implements CategoryInterface {

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

    public function __construct(array $attributes = array(), CategoryRepositoryInterface $repository)
    {
        parent::__construct($attributes);
        $this->repository = $repository;
    }

    public function products()
    {
        return $this->repository->products($this->id);
    }

}