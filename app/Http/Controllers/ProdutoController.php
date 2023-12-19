<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ProdutoController extends Controller
{
    public function cadastrarProduto(Request $informacao){
        Lista::create([
            'nome' => $informacao->nome_produto,
            'descricao' => $informacao->descricao_produto,
            'preco' => $informacao->preco_produto,
            'quantidade' => $informacao->quantidade_produto,

        ]);
        echo "criado com sucesso";
    }

    public function mostrarProduto(Request $informacao, $id_produto){
        $lista1 = Lista::findOrFail($id_produto);
        return view('mostrarProduto', ['lista1' => $lista1]);


    }

    public function editarProduto(Request $informacao, $id_produto){

            $lista1 = Lista::findOrFail($id_produto);
            return view('editarProduto', ['lista1' => $lista1]);

    }

    public function atualizarProduto(Request $informacao, $id_produto) {
        $lista1 = Lista::findOrFail($id_produto);
        $lista1->nome = $informacao->nome_produto;
        $lista1->descricao = $informacao->descricao_produto;
        $lista1->preco = $informacao->preco_produto;
        $lista1->quantidade = $informacao->quantidade_produto;
        $lista1->save();
        echo "Produto Atualizado!";
    }

    public function excluirProduto( $id_produto) {
        $lista1 = Lista::findOrFail($id_produto);
        $lista1->delete();
    echo "Produto Deletado";
    }


    public function index(){
        $lista1 = Lista::all();
        return view('index',['lista1' => $lista1]);
    }


    public function criarProduto(){
        return view('cadastrarProduto');
    }
}
