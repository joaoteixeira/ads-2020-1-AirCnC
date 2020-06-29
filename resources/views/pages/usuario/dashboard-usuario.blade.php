@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div>
    <a href="{{ route('usuario.escolherUsuario')}}">
        <button class="btn-atualizar">Atualizar informações</button>
    </a>

    <ul class="notifications">
        <li>
            <!-- <p>
                Vaga solicitada com <strong>sucesso!</strong>
            </p> -->
        </li>
    </ul>

    <ul class="spot-list">
        @foreach($vagas as $vaga)
        <li>
            <header style="background-image: url('{{$vaga->imagem}}')"></header>
            <strong>{{$vaga->tipo_vaga}}</strong>
            <span>{{$vaga->tecnologias}}</span>
            <span>{{$vaga->qtd_vaga}} vagas</span>
        </li>
        @endforeach
</div>
@endsection