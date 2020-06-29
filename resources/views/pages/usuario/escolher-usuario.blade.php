@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

@foreach($usuarios as $usuario)
<div>
    <ul class="notifications">
        <li>
            <p>
                Usuário <strong>{{$usuario->nome}}</strong><br>
                com o perfil <strong>{{$usuario->perfil_github}}</strong>
            </p>
            <a href="{{ route('usuario.edit', $usuario->id_usuario)}}">
                <button class="btn-atualizar">Atualizar informações</button>
            </a>
        </li>
    </ul>
</div>
@endforeach

@endsection