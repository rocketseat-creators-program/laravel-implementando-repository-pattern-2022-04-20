@extends('layouts.app')

@section('content')
    <div class='flex flex-col gap-4'>
        <h1 class='text-2xl font-bold'>Listagem de Usuários</h1>

        <ul>
            @foreach ($users as $u)
                <li>{{ $u->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
