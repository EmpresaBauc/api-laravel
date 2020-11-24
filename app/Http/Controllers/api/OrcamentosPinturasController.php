<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\OrcamentosPinturas;


class OrcamentosPinturasController extends Controller
{
    public function index()
    {
        return OrcamentosPinturas::all();
    }

    public function store(Request $request)
    {
        OrcamentosPinturas::create($request->all());
    }

    public function show($id)
    {
        return OrcamentosPinturas::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $orcamentosPunturas = OrcamentosPinturas::findOrFail($id);
        $orcamentosPunturas->update($request->all());
    }

    public function destroy($id)
    {
        $orcamentosPunturas = OrcamentosPinturas::findOrFail($id);
        $orcamentosPunturas->delete();
    }
}
