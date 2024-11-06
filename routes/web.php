<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('documentos');
});

Route::get('/documento1', function () {
    return view('financiado');
});

Route::get('/documento2', function () {
    return view('aceptacion');
});

Route::get('/documento3', function () {
    return view('contado');
});

Route::get('/documento4', function () {
    return view('datos');
});

Route::get('/documento5', function () {
    return view('separacion');
});

Route::get('/documento6', function () {
    return view('fichacontado');
});

Route::get('/documento7', function () {
    return view('contratoAuto');
});

Route::get('/documento8', function () {
    return view('contratocontadoConsorcio');
});

Route::get('/documento9', function () {
    return view('contratofinanciadoConsorcio');
});

Route::get('/documento10', function () {
    return view('fichafinanciado');
});

Route::get('/documento11', function () {
    return view('fichadepartamentocontado');
});

Route::get('/documento12', function () {
    return view('fichadepartamentofinanciado');
});

Route::get('/documento13', function () {
    return view('contratodepartamentocontado');
});

Route::get('/documento14', function () {
    return view('contratodepartamentofinanciado');
});

Route::get('/documento15', function () {
    return view('fichalaviña');
});

