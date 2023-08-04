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
        echo $lista1->descricao;
        echo "<br />";
        echo $lista1->nome;
    }

    public function editarProduto(Request $informacao, $id_produto){

            $lista1 = Lista::findOrFail($id_produto);
            return view('editar-produto', ['lista1' => $lista1]);

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


    public function index()
    {
        $lista1 = Lista::select('nome', 'descricao', 'preco', 'quantidade')->get();
        foreach ($lista1 as $lista1) {
            echo "Nome: " . $lista1->nome . "<br>";
            echo "Descricao: " . $lista1->descricao . "<br>";
            echo "Preco: " . $lista1->preco . "<br>";
            echo "Quantidade: " . $lista1->quantidade . "<br>";
            echo "<br>";
        }
    }

    public function criarProduto(){
        return view('cadastrarProduto');
    }
}
