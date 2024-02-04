<?php

namespace App\Repositories;

use App\Repositories\BaseRepositoryInterface;
use App\Models\User;

class BaseRepository implements BaseRepositoryInterface
{
    public function __construct(protected $model)
    {
    }

    public function all()
    {
        return $this->model->all();
    }

    public function allForUser()
    {
        return $this->model->where('id', session('id'));
    }

    public function allWithPaginate($paginate)
    {
        return $this->model->paginate($paginate);
    }

    public function create(array $attribute)
    {
        return $this->model->create($attribute);
    }

    public function update(int $id, array $attribute)
    {
        $this->model->find($id)->update($attribute);
        return $this->find($id);
    }

    public function delete(int $id)
    {
        return $this->model->destroy($id);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function where($index, $value, $paginate = 15)
    {
        return $this->model->where($index, 'LIKE' , $value)->paginate($paginate);
    }

}
