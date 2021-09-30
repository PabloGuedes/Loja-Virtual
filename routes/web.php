<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

/*
|   Categorias
*/
Route::get('/categorias', [App\Http\Controllers\CategoriasController::class, 'index'])->middleware('auth');
Route::get('/categorias/new', [App\Http\Controllers\CategoriasController::class, 'new'])->middleware('auth');
Route::post('/categorias/add', [App\Http\Controllers\CategoriasController::class, 'add'])->middleware('auth');

Route::get('/categorias/{id}/edit', [App\Http\Controllers\CategoriasController::class, 'edit'])->middleware('auth');
Route::post('/categorias/update/{id}', [App\Http\Controllers\CategoriasController::class, 'update'])->middleware('auth');
Route::delete('/categorias/delete/{id}', [App\Http\Controllers\CategoriasController::class, 'delete'])->middleware('auth');

/*
|   Compras
*/
Route::get('/compras', [App\Http\Controllers\ComprasController::class, 'index'])->middleware('auth');
Route::get('/compras/new', [App\Http\Controllers\ComprasController::class, 'new'])->middleware('auth');
Route::post('/compras/add', [App\Http\Controllers\ComprasController::class, 'add'])->middleware('auth');

Route::get('/compras/{id}/edit', [App\Http\Controllers\ComprasController::class, 'edit'])->middleware('auth');
Route::post('/compras/update/{id}', [App\Http\Controllers\ComprasController::class, 'update'])->middleware('auth');
Route::delete('/compras/delete/{id}', [App\Http\Controllers\ComprasController::class, 'delete'])->middleware('auth');

/*
|   Empresas
*/
Route::get('/empresas', [App\Http\Controllers\EmpresasController::class, 'index'])->middleware('auth');
Route::get('/empresas/new', [App\Http\Controllers\EmpresasController::class, 'new'])->middleware('auth');
Route::post('/empresas/add', [App\Http\Controllers\EmpresasController::class, 'add'])->middleware('auth');

Route::get('/empresas/{id}/edit', [App\Http\Controllers\EmpresasController::class, 'edit'])->middleware('auth');
Route::post('/empresas/update/{id}', [App\Http\Controllers\EmpresasController::class, 'update'])->middleware('auth');
Route::delete('/empresas/delete/{id}', [App\Http\Controllers\EmpresasController::class, 'delete'])->middleware('auth');

/*
|   Evoluções
*/
Route::get('/evolucoes', [App\Http\Controllers\EvolucoesController::class, 'index'])->middleware('auth');
Route::get('/evolucoes/new', [App\Http\Controllers\EvolucoesController::class, 'new'])->middleware('auth');
Route::post('/evolucoes/add', [App\Http\Controllers\EvolucoesController::class, 'add'])->middleware('auth');

Route::get('/evolucoes/{id}/edit', [App\Http\Controllers\EvolucoesController::class, 'edit'])->middleware('auth');
Route::post('/evolucoes/update/{id}', [App\Http\Controllers\EvolucoesController::class, 'update'])->middleware('auth');
Route::delete('/evolucoes/delete/{id}', [App\Http\Controllers\EvolucoesController::class, 'delete'])->middleware('auth');

/*
|   Imagens
*/
Route::get('/imagens', [App\Http\Controllers\ImagensController::class, 'index'])->middleware('auth');
Route::get('/imagens/new', [App\Http\Controllers\ImagensController::class, 'new'])->middleware('auth');
Route::post('/imagens/add', [App\Http\Controllers\ImagensController::class, 'add'])->middleware('auth');

Route::get('/imagens/{id}/edit', [App\Http\Controllers\ImagensController::class, 'edit'])->middleware('auth');
Route::post('/imagens/update/{id}', [App\Http\Controllers\ImagensController::class, 'update'])->middleware('auth');
Route::delete('/imagens/delete/{id}', [App\Http\Controllers\ImagensController::class, 'delete'])->middleware('auth');

/*
|   Jogos
*/
Route::get('/jogos', [App\Http\Controllers\JogosController::class, 'index'])->middleware('auth');
Route::get('/jogos/new', [App\Http\Controllers\JogosController::class, 'new'])->middleware('auth');
Route::post('/jogos/add', [App\Http\Controllers\JogosController::class, 'add'])->middleware('auth');

Route::get('/jogos/{id}/edit', [App\Http\Controllers\JogosController::class, 'edit'])->middleware('auth');
Route::post('/jogos/update/{id}', [App\Http\Controllers\JogosController::class, 'update'])->middleware('auth');
Route::delete('/jogos/delete/{id}', [App\Http\Controllers\JogosController::class, 'delete'])->middleware('auth');

/*
|   Produtos
*/
Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'index'])->middleware('auth');
Route::get('/produtos/new', [App\Http\Controllers\ProdutosController::class, 'new'])->middleware('auth');
Route::post('/produtos/add', [App\Http\Controllers\ProdutosController::class, 'add'])->middleware('auth');

Route::get('/produtos/{id}/edit', [App\Http\Controllers\ProdutosController::class, 'edit'])->middleware('auth');
Route::post('/produtos/update/{id}', [App\Http\Controllers\ProdutosController::class, 'update'])->middleware('auth');
Route::delete('/produtos/delete/{id}', [App\Http\Controllers\ProdutosController::class, 'delete'])->middleware('auth');

/*
|   Usuários
*/
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->middleware('auth');
Route::get('/usuarios/new', [App\Http\Controllers\UsuariosController::class, 'new'])->middleware('auth');
Route::post('/usuarios/add', [App\Http\Controllers\UsuariosController::class, 'add'])->middleware('auth');

Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->middleware('auth');
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UsuariosController::class, 'update'])->middleware('auth');
Route::delete('/usuarios/delete/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->middleware('auth');
