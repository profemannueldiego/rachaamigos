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

Route::get('/', function () {
    //return view('welcome');
    return view('homepage');
});

Route::resource('jogador', 'JogadorController');

Route::resource('equipe', 'EquipeController');

Route::resource('torneio', 'TorneioController');
