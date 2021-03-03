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

/**ROTAS EM SI, COM AS SUAS VERBALIZAÇÕES E PALAVRAS CHAVES, COM O IDENTIFICADOR DO SEU RESPECTIVO METODO */

Route::get('Inicio', 'Site\HomeController@home5');
Route::get('perfil','Site\HomeController@profile');
Route::get('turismo','Site\HomeController@turismo');
Route::get('galeria','Site\HomeController@galeria');
Route::get('hotelaria','Site\HomeController@hotelaria');
Route::get('permissão','Site\HomeController@permissao');
Route::get('sms_entrada','Site\HomeController@sms_entrada');
Route::get('sms_nova','Site\HomeController@sms_nova');
Route::get('sms_ler','Site\HomeController@sms_ler');
Route::get('cadastro','Site\HomeController@cadastro');
Route::get('/','Site\HomeController@logar');


/**FUNÇÕES DE CADA ROTA */

Route::get('Inicio', function () {
    return view('Site.principal');
});


Route::get('perfil', function () {
    return view('Site.perfil');
});


Route::get('turismo', function (){
    return view('Site.turismo');
});

Route::get('hotelaria', function (){
    return view('Site.hotelaria');
});


Route::get('galeria', function (){
    return view('Site.galeria');
});


Route::get('permissao', function (){
    return view('Site.permissao');
});


Route::get('sms_ler', function (){
    return view('Site.sms_ler');
});


Route::get('sms_nova', function (){
    return view('Site.sms_nova');
});

Route::get('sms_entrada', function (){
    return view('Site.sms_entrada');
});


Route::get('/', function (){
    return view('Site.logar');
});


Route::get('cadastro', function (){
    return view('Site.cadastro');
});

Auth::routes();


