<?php

use App\Http\Controllers\ProdutosController;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutosController::class, 'index'])->name('pagina_inicial');
Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver/{id}', [ProdutosController::class, 'show'])->name('mostrar_produto');
Route::get('/produtos/editar/{id}', [ProdutosController::class, 'edit']);
Route::post('/produtos/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'delete']);
Route::post('/produtos/excluir/{id}', [ProdutosController::class, 'destroy'])->name('excluir_produto');