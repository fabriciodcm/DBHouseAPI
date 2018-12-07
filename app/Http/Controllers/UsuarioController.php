<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    //
    public function mobilelogin(Request $request){
        $login = $request->input('login');
        $senha = $request->input('senha');
        if(empty($login) || empty($senha) ){
            //faltando parametro 422
            return Response("0",422);
        }
        else{
            try{
                $user = Usuario::where('login','=',$login)->where('senha','=', sha1(sha1(trim($senha))))->firstOrFail();
                return Response()->json($user);
            }catch(\Exception $e){
                
                return Response(0,401);
            }          
        }     
    }


    public function getusers(Request $request){
        $users = Usuario::select('id','nome','login','grupo_usuario_id','parentesco')->get();
        return Response()->json($users);
    }

    public function insert(Request $request){
        if( $request->input('id') == null || empty($request->input('id')) ){
            //insert
            $user = new Usuario();
        }else{
            //update
            $user = Usuario::find($request->input('id'));
        }
        $user->nome = $request->input('nome');  
        $user->login = $request->input('login');
        $user->senha = sha1(sha1(trim("123456")));
        $user->grupo_usuario_id = 2;
        $user->parentesco = $request->input('parentesco');
        
        if($user->save()){
            return Response()->json($user);
        }else{
            return Response("0",500);
        }
    }
}
