<?php

namespace App\Repository;

use App\Models\User;

class UserRepository extends BaseRepository
{
    protected $model = User::class;

    public function all()
    {
        return $this->model->query()
            ->orderBy('name', 'asc')
            ->get();
    }
}
