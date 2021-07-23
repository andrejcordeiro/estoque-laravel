@extends('layout.principal')

@section('conteudo')

<div class="container">
    @if (empty($produtos))
        <div class="alert alert-danger">
            Nenhum produto cadastrado!
        </div>
    @else
        <nav class="navbar navbar-expand-lg navbar-light">      
            <div class="navbar-nav mr-auto">
                <h1>Listagem de	produtos</h1>
            </div>
            <button style="float: right" type="button" class="btn btn-outline-primary" onclick="window.open('{{ action('ProdutoController@novo') }}', '_self');"><span class="fas fa-plus"></span></button>
        </nav>
        <table class="table table-bordered table-hover">
            <tr class="table-active">
                <td>Nome</td>
                <td>Valor</td>
                <td>Descrição</td>
                <td>Quantidade</td>
                <td class="acao">Ação</td>
            </tr>
            @foreach ($produtos as $p)
            <tr class="{{ $p->quantidade <= 1 ? 'table-danger' : '' }}">
                <td>{{ $p->nome }}</td>
                <td>{{ $p->valor }}</td>
                <td>{{ $p->descricao }}</td>
                <td>{{ $p->quantidade }}</td>
                <td class="acao">
                    <span style="cursor: pointer" class="fas fa-eye" onclick="window.open('/produtos/visualizar/{{ $p->id }}', '_self');"></span>
                    <span style="cursor: pointer" class="fas fa-pencil-alt" onclick="window.open('/produtos/editar/{{ $p->id }}', '_self');"></span>
                    <span style="cursor: pointer" class="fas fa-trash" onclick="excluir({{ $p->id }}, '/produtos/excluir/{{ $p->id }}', 'Deseja excluir o produto: {{ $p->nome }}?', 'Produto excluído com sucesso', '/produtos?excluir={{ $p->id }}')"></span>
                </td>
            </tr>
            @endforeach
        </table>
    @endif
</div>
@if (Session::get('notify'))
    <script>
        notifySuccess("{{ Session::get('notifyText') }}");
    </script>
    {{ Session::put('notify', '0') }}
@endif
@stop
