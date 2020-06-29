@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div>
    <a href="{{ route('empresa.escolherEmpresa')}}">
        <button class="btn-atualizar">Atualizar informações</button>
    </a>

    <ul class="notifications">
        <li>
            <p>
                <strong>Perfil do github do usuario</strong> está solicitando uma vaga em <strong>Nome da vaga</strong>. <strong>email do usuario</strong>
            </p>
            <button class="accept">ACEITAR</button>
            <button class="reject">REJEITAR</button>
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
    </ul>

    <a href="{{ route('vaga.create')}}">
        <button class="btn">Criar nova vaga</button>
    </a>
</div>
@endsection