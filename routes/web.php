<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Lista;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-produto', function (Request $informacao) {
    Lista::create([
        'nome' => $informacao->nome_produto,
        'descricao' => $informacao->descricao_produto,
        'preco' => $informacao->preco_produto,
        'quantidade' => $informacao->quantidade_produto,

    ]);
    echo "criado com sucesso";
});

Route::get('/mostrar-produto/{id_produto}', function ($id_produto) {
    $lista1 = Lista::findOrFail($id_produto);
    echo $lista1->descricao;
    echo "<br />";
    echo $lista1->nome;
});

Route::get('/editar-produto/{id_produto}', function ($id_produto) {
    $lista1 = Lista::findOrFail($id_produto);
    return view('editar_produto', ['lista1' => $lista1]);

});

    Route::put('atualizar-produto/{id_produto}', function(Request $informacao, $id_produto) {
        $lista1 = Lista::findOrFail($id_produto);
        $lista1->nome = $informacao->nome_produto;
        $lista1->descricao = $informacao->descricao_produto;
        $lista1->preco = $informacao->preco_produto;
        $lista1->quantidade = $informacao->quantidade_produto;
        $lista1->save();
        echo "Produto Atualizado!";
   })->name('produto.update');

   Route::get('excluir-produto/{id_produto}',function($id_produto) {
    $lista1 = Lista::findOrFail($id_produto);
    $lista1->delete();
    echo "Produto Deletado";
});

Route::get('/catalogode-produto', function () {
    $lista1 = Lista::select('nome', 'descricao', 'preco', 'quantidade')->get();
    foreach ($lista1 as $lista1) {
        echo "Nome: " . $lista1->nome . "<br>";
        echo "Descricao: " . $lista1->descricao . "<br>";
        echo "Preco: " . $lista1->preco . "<br>";
        echo "Quantidade: " . $lista1->quantidade . "<br>";
        echo "<br>";
    }
});



// Route::post('/cadastrar-produto', function (Request $informacao) {
//    Cadastro::create([
//     'nome' => $informacao->nome_produto,
//      'descricao' =>$informacao->descricao_produto,
//      'preco' =>$informacao->preco_produto,
//      'quantidade' =>$informacao->quantidade_estoque

//  ]);
//  return "cadastro criado!";
// });
