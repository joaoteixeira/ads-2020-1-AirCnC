@extends('layouts.login')

@section('title', 'Bem vindo ao AirCnC')

@section('content')
<div class="container">
    <div class="content">
        <p style="text-align:center">
            <strong>Atualizar informações</strong>
        </p>
        <form method="POST" action="{{ route('empresa.update', $empresa->id_empresa)}}">
            @csrf
            @method('PUT')
            <label for="nome">NOME </label>
            <input type="name" id="nome" placeholder="{{$empresa->nome}}" name="nome" />

            <label for="email">E-MAIL </label>
            <input type="email" id="email" placeholder="{{$empresa->email}}" name="email" />

            <button class="btn" type="submit">
                Salvar
            </button>
        </form>
    </div>
</div>
@endsection