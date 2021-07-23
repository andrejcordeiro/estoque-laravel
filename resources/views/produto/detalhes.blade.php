@extends('layout.principal')

@section('conteudo')

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">      
        <div class="navbar-nav mr-auto">
            <h1>Detalhes do produto: {{ $p->nome }}</h1>
        </div>
        <button style="float: right" type="button" class="btn btn-outline-primary" onclick="window.open('{{ action('ProdutoController@lista') }}', '_self');"><span class="fas fa-arrow-left"></span></button>
    </nav>
    <ul>
        <li>
            <b>Valor:</b> R${{ $p->valor }}
        </li>
        <li>
            <b>Descrição:</b> {{ $p->descricao }}
        </li>
        <li>
            <b>Quantidade em estoque:</b> {{ $p->quantidade }}
        </li>
    </ul>
</div>

@stop