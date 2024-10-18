@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Criar Usuário</h1>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            @include('users.form')
 
        </form>
    </div>
@endsection
