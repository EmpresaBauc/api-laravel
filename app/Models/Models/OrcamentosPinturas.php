<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class OrcamentosPinturas extends Model
{
	protected $fillable = [
        'idUsuario',
        'ladoX',
        'ladoY',
        'area',
        'tipoPintura',
        'qtdLitros',
        'tempoPintor',
        'tempoAjudPintor',
    ];

}
