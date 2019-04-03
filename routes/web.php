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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/alunos', 'AlunosController@listarAlunos');
Route::get('/alunos/frequencia/{id}', 'FrequenciaController@frequenciaDoAluno')->where('id', '[0-9]+');
Route::get('/formulario', 'AlunosController@formularioDeCadastro');
Route::post('/alunos/cadastro', 'AlunosController@cadastrarAluno');
Route::get('/alunos/remove/{id}', 'AlunosController@removerAluno');
