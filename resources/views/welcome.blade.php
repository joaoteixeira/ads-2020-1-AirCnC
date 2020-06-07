@extends('layouts.login')

@section('title', 'Bem vindo ao AirCnC')

@section('content')
<div class="container">
    <div class="content">
        <img src="{{asset('assets/logo.png')}}" alt="logo">
        <p>
            Escolha uma das <strong>opções</strong> abaixo.
        </p>
        <form action="/login-empresa">
            <button class="btn" type="submit">
                Empresa
            </button>
        </form>
        <form action="/login-usuario">
            <button class="btn" type="submit">
                Usuário
            </button>
        </form>
    </div>
</div>
@endsection