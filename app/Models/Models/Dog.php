<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $fillable = [
        'raca',
        'nome',
    ];
}
