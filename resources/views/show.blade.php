@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">{{ $user->nome }}</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Telefone:</strong> {{ $user->telefone }}</p>
                <p><strong>Data de Nascimento:</strong> {{ $user->data_nascimento }}</p>
                <p><strong>Cidade:</strong> {{ $user->cidade }}</p>
                <p><strong>Estado:</strong> {{ $user->estado }}</p>
                <p><strong>CEP:</strong> {{ $user->cep }}</p>
                <p><strong>Estado Civil:</strong> {{ $user->estado_civil }}</p>
            </div>
        </div>

        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
@endsection
