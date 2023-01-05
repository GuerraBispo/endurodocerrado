<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')->name('site.home');

Route::get('/sobre-nos', 'SobreNosController@sobre')->name('site.sobrenos');

Route::get('/parceiros', 'ParceirosController@parceiro')->name('site.parceiros');

Route::get('/hospedagens', 'HospedagensController@hospedagem')->name('site.hospedagem');

Route::get('/produtos', 'LojaController@loja')->name('site.loja');

Route::get('/inscricoes', 'InscricoeController@create')->name('site.formulario');
Route::post('/inscricoes', 'InscricoeController@store')->name('site.formulario');

Route::get('/midia', 'MidiaController@midia')->name('site.videos');
Route::get('/galeria', 'FotosController@fotos')->name('site.imagens');

//Route::fallback();