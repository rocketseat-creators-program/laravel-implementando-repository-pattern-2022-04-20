<?php

namespace App\Repository;

abstract class BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public function getModel()
    {
        return app($this->model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function paginate($linhas = 25)
    {
        return $this->model->paginate($linhas);
    }

    public function create($dados)
    {
        return $this->model->create($dados);
    }

    public function update($dados)
    {
        return $this->model->where('id', $dados['id'])
            ->update($dados);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function delete($id)
    {
        $item = $this->find($id);

        return $item->delete();
    }
}
