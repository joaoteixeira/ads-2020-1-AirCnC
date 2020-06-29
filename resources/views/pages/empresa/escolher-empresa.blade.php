@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

@foreach($empresas as $empresa)
<div>
    <ul class="notifications">
        <li>
            <p>
                Empresa <strong>{{$empresa->nome}}</strong><br>
                com o e-mail <strong>{{$empresa->email}}</strong>
            </p>
            <a href="{{ route('empresa.edit', $empresa->id_empresa)}}">
                <button class="btn-atualizar">Atualizar informações</button>
            </a>
        </li>
    </ul>
</div>
@endforeach

@endsection