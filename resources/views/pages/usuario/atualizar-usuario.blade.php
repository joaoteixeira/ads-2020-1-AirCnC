@extends('layouts.login')

@section('title', 'Bem vindo ao AirCnC')

@section('content')
<div class="container">
    <div class="content">
        <p style="text-align:center">
            <strong>Atualizar informações</strong>
        </p>
        <form method="POST" action="{{ route('usuario.index')}}">
            @csrf
            <label for="perfil_github">PERFIL DO GITHUB </label>
            <input type="text" id="perfil_github" placeholder="{{$usuario->perfil_github}}" name="perfil_github" />

            <label for="nome">NOME </label>
            <input type="name" id="nome" placeholder="{{$usuario->nome}}" name="name" />

            <label for="email">E-MAIL </label>
            <input type="email" id="email" placeholder="{{$usuario->email}}" name="email" />

            <label for="tecnologias">TECNOLOGIAS </label>
            <input type="text" id="tecnologias" placeholder="{{$usuario->tecnologias}}" name="tecnologias" />

            <button class="btn" type="submit">
                Salvar
            </button>
        </form>
    </div>
</div>
@endsection