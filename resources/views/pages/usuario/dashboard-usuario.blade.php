@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div>
    <a href="/usuario/atualizar">
        <button class="btn-atualizar">Atualizar informações</button>
    </a>

    <ul class="notifications">
        <li>
            <p>
                Vaga solicitada com <strong>sucesso!</strong>
            </p>
        </li>
    </ul>

    <ul class="spot-list">
        <li>
            <header style="background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=40')"></header>
            <strong>Nome do empresa</strong>
            <span>Nome da vaga</span>
        </li>

        <li>
            <header style="background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=40')"></header>
            <strong>Nome do Usuário</strong>
            <span>Quantidade de vaga</span>
        </li>
    </ul>
</div>
@endsection