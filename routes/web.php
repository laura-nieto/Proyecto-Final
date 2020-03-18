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

Route::get('/', 'CategoriaController@listarIndex');

Route::get('/contacto',function(){
    return view('contacto');
});

Route::get('/login',function(){
    return view('login');
});
Route::post('/login','UserController@login');

Route::get('/registrar',function(){
    return view('registro');
});
Route::post('/registrar','UserController@crear');

Route::get('/ranking','UserController@ranking');

Route::get('/perfil/{name}', 'UserController@show');

Route::get('/abm','CategoriaController@index');
Route::post('/abm','CategoriaController@index');

Route::get('/tablaPreguntas','QuizController@index');

Route::get('/modificarPreguntas','QuizController@edit');
Route::post('/modificarPreguntas','QuizController@update');

Route::get('/agregarPregunta', 'QuizController@create');
Route::post('/agregarPregunta','QuizController@store');

Route::get('/confirmarBorrado','QuizController@show');
Route::post('/confirmarBorrado','QuizController@destroy');

Route::get('/aJugar/{nombre}','CategoriaController@listarPreguntas');
Route::post('/aJugar/{nombre}','UserController@responder');

Route::get('/FAQ',function(){
    return view('FAQ');
});

Route::get('/sugerir','CategoriaController@listarSugerir');
Route::post('/sugerir','UserController@mensaje');

Route::get('/profedit',function(){
    return view ('profedit');
});
Route::post('/profedit','UserController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/eliminarCuenta',function(){
    return view('confirmarCuenta');
});
Route::post('/eliminarCuenta','UserController@destroy');

Route::get('/error', function(){
    return view('error');
});
