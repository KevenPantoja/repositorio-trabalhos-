<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'data_nascimento',
        'cidade',
        'estado',
        'cep',
        'estado_civil',
    ];

    protected $dates = [
        'data_nascimento',
    ];
}
