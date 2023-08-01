<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Models\Lista;

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
        'nome' => $informacao->descricao_produto,
        'nome' => $informacao->preco_produto,
        'nome' => $informacao->quantidade_produto

    ]);
    echo "criado com sucesso";
    dd($informacao->nome_produto);
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
