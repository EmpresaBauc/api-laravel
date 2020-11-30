<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Usuarios;

class UsuarioController extends Controller
{

    public function index()
    {
        return Usuarios::all();
    }

    public function store(Request $request)
    {
        Usuarios::create($request->all());
    }

    public function show($id)
    {
        return Usuarios::findOrFail($id);
    }
   
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario->update($request->all());
    }

    public function destroy($id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario->delete();
    }
}
