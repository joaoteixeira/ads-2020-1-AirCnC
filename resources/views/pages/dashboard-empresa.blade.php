@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div>
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
        <li>
            <header style="background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=40')"></header>
            <strong>Nome da vaga</strong>
            <span>Quantidade de vagas</span>
        </li>
        <li>
            <header style="background-image: url('https://images.unsplash.com/photo-1562229125-6d6075419a22?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=40')"></header>
            <strong>Nome da vaga 2</strong>
            <span>Quantidade de vaga</span>
        </li>
    </ul>

    <a href="/criar-vaga">
        <button class="btn">Criar nova vaga</button>
    </a>
</div>
@endsection