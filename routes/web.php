<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return '¡Hola! Esta es mi primera ruta en Laravel.';
});
