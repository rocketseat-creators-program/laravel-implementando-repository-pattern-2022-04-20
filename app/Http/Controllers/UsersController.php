<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Repository\UserRepository;

class UsersController extends Controller
{
    public function index()
    {
        $users = app(UserRepository::class)->all();

        return view('users.index', compact('users'));
    }

    public function store(UserCreateRequest $request)
    {
        $dados = $request->validated();
        app(UserRepository::class)->create($dados);

        return redirect()->back();
    }
}
