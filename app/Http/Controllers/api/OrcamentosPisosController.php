<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\OrcamentosPisos;


class OrcamentosPisosController extends Controller
{
    public function index()
    {
        return OrcamentosPisos::all();
    }

    public function store(Request $request)
    {
        OrcamentosPisos::create($request->all());
    }

    public function show($id)
    {
        return OrcamentosPisos::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $orcamentosPisos = OrcamentosPisos::findOrFail($id);
        $orcamentosPisos->update($request->all());
    }

    public function destroy($id)
    {
        $orcamentosPisos = OrcamentosPisos::findOrFail($id);
        $orcamentosPisos->delete();
    }
}
