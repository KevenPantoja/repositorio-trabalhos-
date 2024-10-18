<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'telefone' => 'required|string|max:15',
            'data_nascimento' => 'required|date|before:today',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'cep' => 'required|string|max:10',
            'estado_civil' => 'required|string|max:50',
        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'telefone' => 'required|string|max:15',
            'data_nascimento' => 'required|date|before:today',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'cep' => 'required|string|max:10',
            'estado_civil' => 'required|string|max:50',
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuário excluído com sucesso!');
    }
}