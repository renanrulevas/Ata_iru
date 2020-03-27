<?php

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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/cadastro', 'HomeController@cadastro');
Route::get('/carrinho', 'HomeController@carrinho');

Route::get('/contato', 'HomeController@contato');
Route::get('/faq', 'HomeController@faq');
Route::get('/login', 'HomeController@login');
Route::get('/sobre', 'HomeController@sobre');

Route::any('/conta', 'UserController@index')->name('conta.index');
Route::get('/conta/alterarConta', 'UserController@alteraConta')->name('conta.alteraConta');
Route::post('/conta/alterarConta', 'UserController@update')->name('conta.update');
Route::get('/conta/deletarConta', 'UserController@delete')->name('conta.delete');

Route::get('/produtos', 'ProdutoController@index');
Route::get('/produto/{id}', 'ProdutoController@show');
Route::any('/auth/register','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/produto/', 'ProdutoController@admin');
Route::get('/admin/produto/create', 'ProdutoController@create');
Route::post('/admin/produto/insert', 'ProdutoController@insert');
Route::get('/admin/produto/{id}', 'ProdutoController@update');
Route::post('/admin/produto/{id}', 'ProdutoController@put');
Route::get('/admin/produto/excluir/{id}', 'ProdutoController@delete');
Route::post('/admin/produto/excluir/{id}', 'ProdutoController@remove');

