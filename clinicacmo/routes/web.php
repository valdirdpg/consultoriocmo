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
//use App\Http\Controllers\Site;
Route::any('/Site/convenios/pesquisar', 'Site\ConvenioController@search')->name('convenios.search');
Route::resource('/Site/convenios', 'Site\ConvenioController');
Route::get('/index', 'Site\ConvenioController@index');
Route::get('/convenio', 'Site\ConvenioController@create');
Route::get('/', function () {
    return view('welcome');
});

