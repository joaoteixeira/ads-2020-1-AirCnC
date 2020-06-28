@extends('layouts.login')

@section('title', 'Bem vindo ao AirCnC')

@section('content')
<div class="container">
    <div class="content">
        <p style="text-align:center">
            <strong>Atualizar informações</strong>
        </p>
        <form action="/usuario">
            <label for="perfil_github">PERFIL DO GITHUB </label>
            <input type="text" id="perfil_github" placeholder="Seu perfil do Github" />

            <label for="nome">NOME </label>
            <input type="name" id="nome" placeholder="Seu nome" />

            <label for="email">E-MAIL </label>
            <input type="email" id="email" placeholder="Seu melhor e-mail" />

            <label for="tecnologias">TECNOLOGIAS </label>
            <input type="text" id="tecnologias" placeholder="Suas tecnologias" />

            <button class="btn" type="submit">
                Salvar
            </button>
        </form>
    </div>
</div>
@endsection