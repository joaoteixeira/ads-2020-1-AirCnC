@extends('layouts.login')

@section('title', 'Bem vindo ao AirCnC')

@section('content')
<div class="container">
    <div class="content">
        <p style="text-align:center">
            <strong>Cadastrar Empresa</strong>
        </p>
        <form method="POST" action="{{ route('empresa.store')}}">
            @csrf
            <label for="nome">NOME </label>
            <input type="name" id="nome" placeholder="Nome da empresa" name="nome" />

            <label for="email">E-MAIL </label>
            <input type="email" id="email" placeholder="E-mail da empresa" name="email" />

            <button class="btn" type="submit">
                Cadastrar
            </button>
        </form>
    </div>
</div>
@endsection