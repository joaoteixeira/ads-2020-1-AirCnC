@extends('layouts.login')

@section('title', 'Selecione a opção que deseja')

@section('content')
<div class="container">
    <div class="content">
        <p style="text-align:center">
            O que <strong>deseja</strong> fazer?
        </p>
        <form action="{{ route('usuario.create') }}" class="buttons">
            <button class="btn" type="submit">
                Cadastrar Usuário
            </button>
        </form>
        <form action="{{ route('usuario.login')}}" class="buttons">
            <button class="btn" type="submit">
                Fazer Login
            </button>
        </form>
    </div>
</div>
@endsection