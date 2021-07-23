@extends('layout.principal')

@section('conteudo')

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">      
        <div class="navbar-nav mr-auto">
            <h1>Editar produto</h1>
        </div>
        <button style="float: right" type="button" class="btn btn-outline-primary" onclick="window.open('{{ action('ProdutoController@lista') }}', '_self');"><span class="fas fa-arrow-left"></span></button>
    </nav>
    <form action="/produtos/edicao/{{ $p->id }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $p->nome }}">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" id="valor" name="valor" value="{{ $p->valor }}">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $p->quantidade }}">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $p->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Editar</button>
      </form>
</div>

@stop