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



Route::get('/pessoas', 'PessoaController@index')->name('pessoa.index');
Route::get('/pessoas/read', 'PessoaController@read')->name('pessoa.read');
Route::get('/pessoas/create', 'PessoaController@create')->name('pessoa.create');
Route::post('/pessoas/store', 'PessoaController@store')->name('pessoa.store');




Route::get('/produtos', 'ProdutoController@index')->name('produto.index');
Route::get('/produtos/read', 'ProdutoController@read')->name('produto.read');
Route::get('/produtos/create', 'ProdutoController@create')->name('produto.create');
Route::post('/produtos/store', 'ProdutoController@store')->name('produto.store');



Route::get('/carbon', 'CarbonController@index')->name('carbon.index');
Route::post('/carbon/store', 'CarbonController@store')->name('carbon.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
