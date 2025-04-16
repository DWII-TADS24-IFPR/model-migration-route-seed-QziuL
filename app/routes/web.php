<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Teste');
    //return view('welcome');
});

//Route::get('/eixo', function () {
//    return "<h1>Rota Simples</h1>";
//});
//
//Route::get('/parametro/{a}', function ($a) {
//    return "<h1>Parâmetro recebido: $a</h1>";
//});
//
//Route::get('/parametros/{a}/{b}/{c}', function ($a, $b, $c) {
//    return "<h1>Parâmetros recebidos: $a / $b / $c</h1>";
//});
//
//Route::get('/opcionais/{a}/{b}/{c?}', function ($a, $b, $c=0) {
//    return "<h1>Parâmetros recebidos: $a / $b / $c</h1>";
//});
//
//Route::resource('/eixo', 'App\Http\Controllers\EixoController');
