<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('documentos');
});

Route::get('/documento1', function () {
    return view('RIBERA_1.ficha_contado_r1');
});

Route::get('/documento2', function () {
    return view('RIBERA_1.ficha_financiado_r1');
});

Route::get('/documento3', function () {
    return view('RIBERA_1.contrato_contado_r1');
});

Route::get('/documento4', function () {
    return view('RIBERA_1.contrato_financiado_r1');
});

Route::get('/documento5', function () {
    return view('RIBERA_1_ESTACIONAMIENTO.contrato_auto');
});

Route::get('/documento6', function () {
    return view('RIBERA_1_DEPARTAMENTOS.ficha_contado_r1_depa');
});

Route::get('/documento7', function () {
    return view('RIBERA_1_DEPARTAMENTOS.ficha_financiado_r1_depa');
});

Route::get('/documento8', function () {
    return view('RIBERA_1_DEPARTAMENTOS.contrato_contado_r1_depa');
});

Route::get('/documento9', function () {
    return view('RIBERA_1_DEPARTAMENTOS.contrato_financiado_r1_depa');
});

Route::get('/documento10', function () {
    return view('RIBERA_1_DEPARTAMENTOS.cronograma_r1_depa');
});

Route::get('/documento11', function () {
    return view('VIÑA.ficha_v');
});


Route::get('/documento12', function () {
    return view('VIÑA.contrato_contado_v');
});

Route::get('/documento13', function () {
    return view('VIÑA.contrato_financiado_v');
});

Route::get('/documento14', function () {
    return view('VIÑA.cronograma_v');
});
Route::get('/documento15', function () {
    return view('RIBERA_2.ficha_contado_r2');
});

Route::get('/documento16', function () {
    return view('RIBERA_2.ficha_financiado_r2');
});
Route::get('/documento17', function () {
    return view('RIBERA_2.contrato_contado_r2');
});
Route::get('/documento18', function () {
    return view('RIBERA_2.contrato_financiado_r2');
});
Route::get('/documento19', function () {
    return view('RIBERA_2.cronograma_r2');
});
