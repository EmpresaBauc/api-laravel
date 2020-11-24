<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'senha',
    ];
}
