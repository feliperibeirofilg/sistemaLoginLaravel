@extends('layouts.app')


    @section('content')

            @if(session('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>
            @endif
    
        <h1>Faça seu login agora mesmo!!!</h1>
        <a class="nav-link" href="usuarios/criarUsuario">Clique aqui <-</a>

        <a  href="login">Já tem login? Clique aqui para entrar <-</a>

    @endsection
        
