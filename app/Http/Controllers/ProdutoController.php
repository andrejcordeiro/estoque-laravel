<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller{
    public function lista(Request $request)
    {
        // FAZ UM SELECT COM TODOS OS PRODUTOS
        $produtos = Produto::all();
        
        $data = [];
        $data['produtos'] = $produtos;

        return view('produto.listagem', $data);
    }

    public function visualizar(Request $request)
    {
        $id = $request->route('id', '0');

        // FAZ UM SELECT COM WHERE ID
        $visualizar = Produto::find($id);

        if(empty($visualizar)) {
            return 'Esse produto não existe';
        }
        
        return view('produto.detalhes')->with('p', $visualizar);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adicionar(ProdutosRequest $request)
    {
        

        Produto::create($request->all());

        $request->session()->put('notify', '1');
        $request->session()->put('notifyText', 'Produto cadastrado com sucesso!');
        return redirect()->route('lista');
    }

    public function editar(Request $request)
    {
        $id = $request->route('id', '0');

        // FAZ UM SELECT COM WHERE ID
        $visualizar = Produto::find($id);

        if(empty($visualizar)) {
            return 'Esse produto não existe';
        }
        
        return view('produto.editar')->with('p', $visualizar);
    }

    public function edicao(Request $request)
    {
        $id = $request->route('id', '0');

        $params = $request->all();
        $produto = Produto::find($id);
        $produto->update($params);

        $request->session()->put('notify', '1');
        $request->session()->put('notifyText', 'Produto editado com sucesso!');

        return redirect()->route('lista');
    }

    public function excluir(Request $request)
    {
        $id = $request->route('id', '0');
        $produto = Produto::find($id);
        $produto->delete();

        $request->session()->put('notify', '1');
        $request->session()->put('notifyText', 'Produto excluído com sucesso!');

        return redirect()->route('lista');
    }
}
