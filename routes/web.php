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