<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Usuarios;


class LoginController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $senha = $request->senha;
        $usuario = new Usuarios();
        $oUsuario = Usuarios::where('email', $email)->first();
        if($oUsuario == null){
            return response(['status'=> false,'dados'=>null, 'mensagem'=> 'Email não encontrado !']);
        }else{
            if($oUsuario->senha == $senha){
                $dados = array(
                    'nome' => $oUsuario->nome,
                    'email' => $oUsuario->email,
                    'id' => $oUsuario->id,
                );
                return response(['status'=> true,'dados'=>$dados, 'mensagem'=> 'login']);
            }else{
                return response(['status'=> false,'dados'=>null, 'mensagem'=> 'Senha Incorreta !']);
            }
        }
    }
}
