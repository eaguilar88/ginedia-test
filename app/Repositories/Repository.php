<?php

namespace App\Repositories;

use App\Category;
use Illuminate\Database\Eloquent\Collection;

/**
 * Repository
 */
class Repository implements RepositoryInterface
{

    protected $categoryModel;

    /**
     * __construct
     *
     * @param mixed $category
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->categoryModel = $category;
    }


    /**
     * findAll
     *
     * @param array $relationships
     * @return Category[]|Collection
     */
    public function findAll(array $relationships)
    {
        return $this->categoryModel->with($relationships)->get();
    }

    /**
     * findOne
     *
     * @param mixed $id
     * @return Category[]|Collection
     */
    public function findOne(int $id)
    {
        return $this->categoryModel->find($id);
    }
}
