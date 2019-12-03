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

/*
Route::get('/', function () { return view('welcome'); });
*/

//tautor
Route::get('/','TautorController@index');
Route::get('autorHome','TautorController@index');
Route::get('autorNovo','TautorController@create');
Route::post('autorSalvarNovo','TautorController@store');
Route::get('autorEditar/{idautor}','TautorController@edit');
Route::post('autorSalvarEdicao','TautorController@update');
Route::get('autorApagar/{idautor}','TautorController@destroy');
//teditora
Route::get('editoraHome','TeditoraController@index');
Route::get('editoraNovo','TeditoraController@create');
Route::post('editoraSalvarNovo','TeditoraController@store');
Route::get('editoraEditar/{ideditora}','TeditoraController@edit');
Route::post('editoraSalvarEdicao','TeditoraController@update');
Route::get('editoraApagar/{ideditora}','TeditoraController@destroy');
//tgeneroliterario
Route::get('generoliterarioHome','TgeneroliterarioController@index');
Route::get('generoliterarioNovo','TgeneroliterarioController@create');
Route::post('generoliterarioSalvarNovo','TgeneroliterarioController@store');
Route::get('generoliterarioEditar/{idgeneroliterario}','TgeneroliterarioController@edit');
Route::post('generoliterarioSalvarEdicao','TgeneroliterarioController@update');
Route::get('generoliterarioApagar/{idgeneroliterario}','TgeneroliterarioController@destroy');
//tlivro
Route::get('livroHome','TlivroController@index');
Route::get('livroNovo','TlivroController@create');
Route::post('livroSalvarNovo','TlivroController@store');
Route::get('livroEditar/{idlivro}','TlivroController@edit');
Route::post('livroSalvarEdicao','TlivroController@update');
Route::get('livroApagar/{idlivro}','TlivroController@destroy');
