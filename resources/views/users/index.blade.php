@extends('layouts.app')

@section('content')
    <div class='flex flex-col gap-4'>
        <h1 class='text-2xl font-bold'>Lista de Usuários</h1>

        <form action="/" method='post' class='flex flex-col gap-2 p-2 bg-gray-100 rounded-md'>
            @csrf

            <ul>
                @foreach($errors->all() as $error)
                    <li class='text-red-600 font-bold'>{{ $error }}</li>
                @endforeach
            </ul>

            <input type="text" class='border-1 border-gray-400 rounded'
                name='name' placeholder='Digite seu nome' />

            <input type="text" class='border-1 border-gray-400 rounded'
                name='email' placeholder='Digite seu e-mail' />

            <input type="password" class='border-1 border-gray-400 rounded'
                name='password' placeholder='Digite sua senha' />

            <button type="submit"
                class='bg-green-500 rounded-md p-2 text-gray-800 font-medium'>Salvar</button>
        </form>

        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
