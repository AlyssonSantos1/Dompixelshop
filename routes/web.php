<?php

use App\Http\Controllers\ProdutoController;
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

Route::post('/cadastrar-produto',[ProdutoController::class,'cadastrarProduto'])->name('produto.create');

Route::get('/cadastrar-produto',[ProdutoController::class,'criarProduto']);


Route::get('/mostrar-produto/{id_produto}',
[ProdutoController::class,'mostrarProduto'])->name('produto.show');

Route::get('/editar-produto/{id_produto}',
[ProdutoController::class,'editarProduto'])->name('produto.edit');

Route::put('/atualizar-produto/{id_produto}',
[ProdutoController::class,'atualizarProduto'])->name('produto.update');

Route::get('/excluir-produto/{id_produto}',
[ProdutoController::class,'excluirProduto'])->name('produto.delete');

Route::get('/catalogo-de-produto/{id_produto?}',
[ProdutoController::class,'index'])->name('produto.list');

Route::get('/index/listar-produtos',[ProdutoController::class,'index']);



