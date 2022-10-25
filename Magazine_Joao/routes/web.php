<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;

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
Route::get('/categorias/edit', [CategoriaController::class, 'edit']);
Route::post('/categorias/update/{cat}', [CategoriaController::class, 'update']); //cat é id
Route::delete('/categorias/delete/{cat}', [CategoriaController::class, 'destroy']);

Route::get('/usuario/', [UsuarioController::class, 'index']);
Route::post('/usuario/login', [UsuarioController::class, 'login']);
Route::post('/usuario/store', [UsuarioController::class, 'store']);

// Route::get('/produto/{id}', [ProdutoController::class, 'index']);
// Route::post('/produto/{produto}', [ProdutoController::class, 'update']); //produto é id | conferir rota
Route::get('/produto/{id}/{id_filho}', [ProdutoController::class, 'index']);
Route::post('/produto/update/{produto}/{produto_filho}', [ProdutoController::class, 'update']); // no form usar _method="metodo certo"
Route::post('/produto/deactivate/{produto}/{produto_filho}', [ProdutoController::class, 'deactivate']);
Route::post('/produto/deactivate_child/{produto}/{produto_filho}', [ProdutoController::class, 'deactivate_child']);
