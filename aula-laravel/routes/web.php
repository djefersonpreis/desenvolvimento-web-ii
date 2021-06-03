<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProdutoController;

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

Route::get('/produtos',                    [ProdutoController::class, 'Listagem'])->name('produtos.listagem');
Route::get('/produtos/create',             [ProdutoController::class, 'create'])  ->name('produtos.create');
Route::get('/produto/show/{produto_id}',   [ProdutoController::class, 'show'])    ->name('produtos.show')  ->where('produto_id', '[0-9]+');
Route::get('/produto/remove/{produto_id}', [ProdutoController::class, 'remove'])  ->name('produtos.remove')->where('produto_id', '[0-9]+');
Route::get('/produto/edit/{produto_id}',   [ProdutoController::class, 'edit'])    ->name('produtos.edit')  ->where('produto_id', '[0-9]+');

Route::post('/produtos',        [ProdutoController::class, 'store'])->name('produtos.listagem');
Route::post('/produtos/update', [ProdutoController::class, 'update'])->name('produtos.update');


