<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function formulario(){
        return view('criarUsuario.criarUsuario');
    }

    public function cadastrar(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|min:3',
        ]);

        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);

        return redirect()->route('login')->with('sucesso', 'Usuario cadastrado com sucesso!');
    }

}
