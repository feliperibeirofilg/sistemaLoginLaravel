<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function mostrarFormulario(){
        return view('login');
    }

    public function login(Request $request){

        $request->validate([
            'email'=> 'required|email',
            'senha' =>'required',
        ]);

        //Busca o usuario pelo email
        $usuario = Usuario::where('email', $request->email)->first();

        if(!$usuario){
            //Se o Usuario não for encontrado
            return back()->withErrors(['email' => 'Email não encontrado.'])->withInput();
        }

        if(!Hash::check($request->senha, $usuario->senha)){
            //Senha incorreta
            return back()->withErros(['senha' => 'Senha incorreta.'])->withInput();   
        }

        //Autenticador o usuário manualmente
        Auth::login($usuario);

        //Login ok, redireiciona para a pagina inicial
        return redirect()->route('login')->with('sucesso', 'Login realizado com sucesso');
    }

    public function sair(){
        Auth::logout();

        return redirect()->route('welcome')->with('suceso', 'Logout realizado com sucesso');
    }
}
