@extends('layouts.login')

@section('title', 'Bem vindo ao AirCnC')

@section('content')
<div class="container">
    <div class="content">
        <h1 style="text-align:center;">Bem vindo ao AirCnC</h1>
        <img src="{{asset('assets/logo.png')}}" alt="logo" class="logo_center">
        <p style="text-align:center">
            Quem é <strong>você</strong>?
        </p>
        <form action="/empresa/selecionar" class="buttons">
            <button class="btn" type="submit">
                Empresa
            </button>
        </form>
        <form action="{{ route('usuario.create')}}" class="buttons">
            <button class="btn" type="submit">
                Usuário
            </button>
        </form>
    </div>
</div>
@endsection