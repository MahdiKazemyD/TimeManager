<?php

namespace App\Http\Repositories;

interface BaseRepositoryInterface
{
    public function all();

    public function allWithPaginate($paginate);
    public function create(array $attribute);
    public function update(int $id, array $attribute);
    public function delete(int $id);
    public function find(int $id);

    public function where($index, $value, $paginate);
}
