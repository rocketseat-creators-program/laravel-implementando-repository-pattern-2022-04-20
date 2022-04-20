<?php

namespace App\Repository;

abstract class BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModelInstance();
    }

    protected function getModelInstance()
    {
        return app($this->model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function paginate($rows = 25)
    {
        return $this->model->paginate($rows);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }
}
