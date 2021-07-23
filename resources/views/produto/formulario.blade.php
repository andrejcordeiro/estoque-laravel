@extends('layout.principal')

@section('conteudo')

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">      
        <div class="navbar-nav mr-auto">
            <h1>Novo produto</h1>
        </div>
        <button style="float: right" type="button" class="btn btn-outline-primary" onclick="window.open('{{ action('ProdutoController@lista') }}', '_self');"><span class="fas fa-arrow-left"></span></button>
    </nav>
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="/produtos/adicionar" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" id="valor" name="valor" value="{{ old('valor') }}">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ old('quantidade') }}">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição</label>
          <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ old('descricao') }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Adicionar</button>
      </form>
</div>
@stop