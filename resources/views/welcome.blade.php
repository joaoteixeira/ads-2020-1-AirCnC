@extends('layouts.principal')

@section('title', 'Bem vindo ao AirCnC')

@section('content')
<div class="container">
    <div class="content">
        <p>
            Ofereça <strong>spots</strong> para programadores e encontre
            <strong>talentos</strong> para sua empresa
        </p>
        <form>
            <label for="email">E-MAIL *</label>
            <input type="email" id="email" placeholder="Seu melhor e-mail" value="email" />
            <button class="btn" type="submit">
                Entrar
            </button>
        </form>
    </div>
</div>
@endsection