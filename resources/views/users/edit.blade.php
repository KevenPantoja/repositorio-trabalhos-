@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Editar Usuário</h1>

        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            @include('users.form', ['user' => $user])

        </form>
    </div>
@endsection
