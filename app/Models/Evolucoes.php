<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolucoes extends Model
{
    protected $fillable = [
        'idEvolucao',
        'imagem_avatar',
        'dataHoraEvolucao',
        'avatar'
    ];}
