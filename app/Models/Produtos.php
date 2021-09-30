<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'id',
        'idCategoria',
        'descricao',
        'data_vencimento',
        'moedas',
        'quantidade',
        'preco'
    ];

    public function idCategoria(){
        return $this->belongsTo(idCategoria::class);
    }
}
