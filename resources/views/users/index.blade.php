@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Usuários</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-center mb-4">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Criar Novo Usuário</a>
        </div>

        <ul class="list-group">
            @foreach ($users as $user)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $user->nome }} - {{ $user->email }}
                    <div>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
