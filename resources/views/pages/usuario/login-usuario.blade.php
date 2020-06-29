@extends('layouts.login')

@section('title', 'Bem vindo ao AirCnC')

@section('content')
<div class="container">
    <div class="content">
        <p style="text-align:center">
            <strong>Usuário</strong>
        </p>
        <form method="GET" action="{{ route('usuario.fazerLogin')}}">
            @csrf
            <label for="perfil_github">PERFIL DO GITHUB </label>
            <input type="text" id="perfil_github" placeholder="Seu perfil do Github" name="perfil_github" />

            <label for="nome">NOME </label>
            <input type="name" id="nome" placeholder="Seu nome" name="nome" />

            <button class="btn" type="submit">
                Entrar
            </button>
        </form>
    </div>
</div>
@endsection