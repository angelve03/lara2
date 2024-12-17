<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('documentos');
});

Route::get('/documento1', function () {
    return view('RIBERA_1.1_ETAPA.ficha_contado_r1_1e');
});

Route::get('/documento2', function () {
    return view('RIBERA_1.1_ETAPA.ficha_financiado_r1_1e');
});

Route::get('/documento3', function () {
    return view('RIBERA_1.1_ETAPA.contrato_contado_r1_1e');
});

Route::get('/documento4', function () {
    return view('RIBERA_1.1_ETAPA.contrato_financiado_r1_1e');
});

Route::get('/documento5', function () {
    return view('RIBERA_1.1_ETAPA.cronograma_r1_1e');
});



Route::get('/documento6', function () {
    return view('RIBERA_1.2_ETAPA.ficha_contado_r1_2e');
});

Route::get('/documento7', function () {
    return view('RIBERA_1.2_ETAPA.ficha_financiado_r1_2e');
});

Route::get('/documento8', function () {
    return view('RIBERA_1.2_ETAPA.contrato_contado_r1_2e');
});

Route::get('/documento9', function () {
    return view('RIBERA_1.2_ETAPA.contrato_financiado_r1_2e');
});

Route::get('/documento10', function () {
    return view('RIBERA_1.2_ETAPA.cronograma_r1_2e');
});



Route::get('/documento11', function () {
    return view('RIBERA_1_ESTACIONAMIENTO.ficha_contado_auto');
});

Route::get('/documento12', function () {
    return view('RIBERA_1_ESTACIONAMIENTO.ficha_financiado_auto');
});

Route::get('/documento13', function () {
    return view('RIBERA_1_ESTACIONAMIENTO.contrato_contado_auto');
});

Route::get('/documento14', function () {
    return view('RIBERA_1_ESTACIONAMIENTO.contato_financiado_auto');
});

Route::get('/documento15', function () {
    return view('RIBERA_1_ESTACIONAMIENTO.cronograma_auto');
});



Route::get('/documento16', function () {
    return view('RIBERA_1_DEPARTAMENTOS.ficha_contado_r1_depa');
});

Route::get('/documento17', function () {
    return view('RIBERA_1_DEPARTAMENTOS.ficha_financiado_r1_depa');
});

Route::get('/documento18', function () {
    return view('RIBERA_1_DEPARTAMENTOS.contrato_contado_r1_depa');
});

Route::get('/documento19', function () {
    return view('RIBERA_1_DEPARTAMENTOS.contrato_financiado_r1_depa');
});

Route::get('/documento20', function () {
    return view('RIBERA_1_DEPARTAMENTOS.cronograma_r1_depa');
});



Route::get('/documento21', function () {
    return view('VIÑA.ficha_v');
});
Route::get('/documento22', function () {
    return view('VIÑA.contrato_contado_v');
});
Route::get('/documento23', function () {
    return view('VIÑA.contrato_financiado_v');
});
Route::get('/documento24', function () {
    return view('VIÑA.cronograma_v');
});



Route::get('/documento25', function () {
    return view('RIBERA_2.ficha_contado_r2');
});
Route::get('/documento26', function () {
    return view('RIBERA_2.ficha_financiado_r2');
});
Route::get('/documento27', function () {
    return view('RIBERA_2.contrato_contado_r2');
});
Route::get('/documento28', function () {
    return view('RIBERA_2.contrato_financiado_r2');
});
Route::get('/documento29', function () {
    return view('RIBERA_2.cronograma_r2');
});



Route::get('/documento40', function () {
    return view('RIBERA_3.ficha_contado_r3');
});
Route::get('/documento41', function () {
    return view('RIBERA_3.ficha_financiado_r3');
});
Route::get('/documento42', function () {
    return view('RIBERA_3.contrato_contado_r3');
});
Route::get('/documento43', function () {
    return view('RIBERA_3.contrato_financiado_r3');
});
Route::get('/documento44', function () {
    return view('RIBERA_3.cronograma_r3');
});