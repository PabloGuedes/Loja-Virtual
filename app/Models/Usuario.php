<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'idUser',
        'login',
        'senha',
        'ultima_atualizacao',
        'saldo_moedas',
        'saldo_pontos'
    ];}