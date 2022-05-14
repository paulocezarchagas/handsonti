<?php

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

Route::get('/produtos/novo', 'ProdutosController@create');
Route::post('/produtos/novo', 'ProdutosController@store')->name('registrar_produto');
Route::get('/produtos/ver/{id}', 'ProdutosController@show');
Route::get('/produtos/editar/{id}', 'ProdutosController@edit');
Route::post('/produtos/editar/{id}', 'ProdutosController@update')->name('alterar_produto');
Route::get('/produtos/excluir/{id}', 'ProdutosController@delete');
Route::post('/produtos/excluir/{id}', 'ProdutosController@destroy')->name('excluir_produto');