<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{
    protected $model = User::class;

    public function create($dados)
    {
        $dados['password'] = Hash::make($dados['password']);

        return app($this->model)->create($dados);
    }
}
