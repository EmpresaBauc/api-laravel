<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class OrcamentosPisos extends Model
{
	protected $fillable = [
        'idUsuario',
        'ladoX',
        'ladoY',
        'area',
        'tipoPiso',
        'qtdPecas',
        'qtdArgamassa',
        'tempoPedreiro',
        'tempoAjudante',
    ];
}
