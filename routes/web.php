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
Route::get('/alunos', 'AlunosController@listarTodosOsAlunos');
Route::get('/alunos/frequencia/{id}&{RA}', 'FrequenciaController@frequenciaDoAluno')->where('id', '[0-9]+');
Route::get('/formulario', 'FormularioDeCadastroController@formularioDeCadastro');
Route::post('/alunos/cadastro', 'AlunosController@cadastrarAluno');
Route::get('/alunos/remove/{id}', 'AlunosController@removerAluno');
Route::get('/qrcode', 'QRCodeController@exibirQRCode');
Route::post('/valida/{id}', 'ValidaQRCodeController@validaQRCode');

Route::get("/qrcode/identificacao", function(){
    return View::make("qrcode.pageQRCode");
 });