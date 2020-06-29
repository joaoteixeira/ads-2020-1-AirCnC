@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div>
    <a href="{{ route('empresa.escolherEmpresa')}}">
        <button class="btn-atualizar">Atualizar informações</button>
    </a>

    <ul class="notifications">
        @foreach($vagas as $vaga)
        @foreach($usuarios as $usuario)
        <li>
            <p>
                O usuário <strong>{{$usuario->perfil_github}}</strong> está solicitando uma vaga para <strong>{{$vaga->tipo_vaga}}</strong>.
                <strong>{{$usuario->email}}</strong>
            </p>
            <button class="accept" type="submit">ACEITAR</button>
            <button class="reject" type="submit">REJEITAR</button>

        </li>
        @endforeach
        @endforeach
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