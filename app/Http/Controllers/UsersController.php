<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repository\UserRepository;

class UsersController extends Controller
{
    public function index()
    {
        // $users = User::all();
        $users = app(UserRepository::class)->all();

        return view('users.index', compact('users'));
    }
}
