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
Route::any('/Site/especialidades/pesquisar', 'Site\EspecialidadeController@search')->name('especialidades.search');
Route::resource('/Site/convenios', 'Site\ConvenioController');
Route::resource('/Site/especialidades','Site\EspecialidadeController');
Route::get('/convenio', 'Site\ConvenioController@index');
route::get('/especialidade', 'Site\EspecialidadeController@index');
Route::get('/convenio', 'Site\ConvenioController@create');
Route::get('/', function () {
    return view('welcome');
});

