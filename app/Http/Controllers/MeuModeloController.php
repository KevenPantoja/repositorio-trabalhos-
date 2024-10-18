<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MeuModeloController extends Controller
{
    
    public function create()
    {
        return view('teste_formulario');
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
        ], [
            'required' => 'O campo :attribute é obrigatório.',
            'email.unique' => 'Este e-mail já está cadastrado.',
            'email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'before' => 'A data de nascimento deve ser anterior a hoje.',
            'max' => 'O campo :attribute não pode ter mais de :max caracteres.',
        ]);

  
        User::create($request->all());

        return redirect()->back()->with('success', 'Formulário enviado com sucesso!');
    }
}
