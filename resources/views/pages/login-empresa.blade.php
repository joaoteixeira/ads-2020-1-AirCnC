@extends('layouts.login')

@section('title', 'Bem vindo ao AirCnC')

@section('content')
<div class="container">
    <div class="content">
        <p style="text-align:center">
            <strong>Empresa</strong>
        </p>
        <form action="/empresa">
            <label for="nome">NOME </label>
            <input type="name" id="nome" placeholder="Nome da empresa" />

            <label for="email">E-MAIL </label>
            <input type="email" id="email" placeholder="E-mail da empresa" />

            <button class="btn" type="submit">
                Entrar
            </button>
        </form>
    </div>
</div>
@endsection