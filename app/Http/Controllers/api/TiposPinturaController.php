<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\TiposPintura;


class TiposPinturaController extends Controller
{
    public function index()
    {
        return TiposPintura::all();
    }

    public function store(Request $request)
    {
        TiposPintura::create($request->all());
    }

    public function show($id)
    {
        return TiposPintura::findOrFail($id);
    }
   
    public function update(Request $request, $id)
    {
        $tiposPintura = TiposPintura::findOrFail($id);
        $tiposPintura->update($request->all());
    }

    public function destroy($id)
    {
        $tiposPintura = TiposPintura::findOrFail($id);
        $tiposPintura->delete();
    }
}
