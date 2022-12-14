<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Models\Carrinho;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/create', [CategoriaController::class, 'create']);
Route::post('/categorias/store', [CategoriaController::class, 'store']);
Route::post('/categorias/edit', [CategoriaController::class, 'edit']); //sei que é estranho ser um post, mas é o jeito para funcionar da forma que está estruturado
Route::get('/categorias/delete', [CategoriaController::class, 'destroy']); // mesma coisa aqui
Route::post('/categorias/update', [CategoriaController::class, 'update']);

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::post('/usuarios/login', [UsuarioController::class, 'login']);
Route::post('/usuarios/store', [UsuarioController::class, 'store']);
Route::get('/usuarios/criarConta', [UsuarioController::class, 'create']);
Route::get('/usuarios/logout', [UsuarioController::class, 'logout']);

// Route::get('/produto/{id}', [ProdutoController::class, 'index']);
// Route::post('/produto/{produto}', [ProdutoController::class, 'update']); //produto é id | conferir rota
Route::get('/produto/{id}/{id_filho}', [ProdutoController::class, 'index']);
Route::get('/produto/create', [ProdutoController::class, 'create']);
Route::post('/produto/update', [ProdutoController::class, 'update']); // no form usar _method="metodo certo"
Route::post('/produto/{id_pai}/{id_filho}/add_child', [ProdutoController::class, 'add_child']);
Route::post('/produto/deactivate', [ProdutoController::class, 'deactivate']);
Route::post('/produto/deactivate_child', [ProdutoController::class, 'deactivate_child']);
Route::get('/produto/create', [ProdutoController::class, 'create']);
Route::post('/produto/store', [ProdutoController::class, 'store']);

Route::get('/carrinho', [CarrinhoController::class, 'index']);
Route::get('/carrinho/{id_pai}/{id_filho}/add_carrinho', [CarrinhoController::class, 'add_carrinho']);
