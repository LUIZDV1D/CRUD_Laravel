<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [
    'nome',
    'endereco',
    'numero'
    ];
}