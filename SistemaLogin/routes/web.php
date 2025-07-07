<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;

//Rota da tela inicial
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Rota da tela de login

Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::get('/login',[LoginController::class, 'mostrarFormulario'])->name('usuarios.formulario');

Route::post('/login',[LoginController::class, 'login'])->name( 'login');

//Rotas de criação do usuario

Route::get('usuarios/criarUsuario',[UsuarioController::class, 'formulario'])->name('usuarios.formulario');

Route::post('usuarios/criarUsuario',[UsuarioController::class, 'cadastrar'])->name( 'usuarios.cadastrar');

//rota da tela pós login
Route::get('/inicio', function () {
    return view('inicio.inicio');
});

?>