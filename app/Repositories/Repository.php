<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Repository
 */
class Repository implements RepositoryInterface
{

    protected $model;

    /**
     * __construct
     *
     * @param mixed $model
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    /**
     * findAll
     *
     * @param array $relationships
     * @return Category[]|Collection
     */
    public function findAll(array $relationships)
    {
        return $this->model->with($relationships)->get();
    }

    /**
     * findOne
     *
     * @param mixed $id
     * @return Category[]|Collection
     */
    public function findOne(int $id)
    {
        return $this->model->find($id);
    }
}
