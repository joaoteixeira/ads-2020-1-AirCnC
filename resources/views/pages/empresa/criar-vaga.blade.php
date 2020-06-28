@extends('layouts.login')

@section('title', 'Criar vaga')

@section('content')
<div>
    <div class="container">
        <div class="content">
            <form action="/empresa">

                <label for="vaga">VAGA</label>
                <input type="text" id="vaga" placeholder="Qual o nome da vaga disponível?" />

                <label for="techs">TECNOLOGIAS<span> (separadas por vírgula)</span></label>
                <input type="text" id="techs" placeholder="Quais tecnologias usam?" />

                <label for="quant_vaga">QUANTIDADE DE VAGAS </label>
                <input type="number" id="quant_vaga" placeholder="Qual a quantidade de vagas?" />

                <label for="quant_vaga">FOTO RELACIONADA<span> (URL da imagem)</span> </label>
                <input type="text" id="imagem" placeholder="Qual a imagem relacionada a essa vaga?" />

                <button type="submit" class="btn">Criar</button>
            </form>
        </div>
    </div>
</div>
@endsection