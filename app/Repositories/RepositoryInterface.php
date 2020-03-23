<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function findAll(array $relationships);

    public function findOne(int $id);
}
