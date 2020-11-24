<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\TiposPiso;


class TiposPisoController extends Controller
{
    public function index()
    {
        return TiposPiso::all();
    }

    public function store(Request $request)
    {
        TiposPiso::create($request->all());
    }

    public function show($id)
    {
        return TiposPiso::findOrFail($id);
    }
   
    public function update(Request $request, $id)
    {
        $tiposPiso = TiposPiso::findOrFail($id);
        $tiposPiso->update($request->all());
    }

    public function destroy($id)
    {
        $tiposPiso = TiposPiso::findOrFail($id);
        $tiposPiso->delete();
    }
}
