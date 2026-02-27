<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});

Route::get('/notas', function () {
    return 'Lista de notas ';
});

Route::get('/notas/{id}', function ($id) {
   return 'Detalle de las nota'.$id;
});

Route::get('/notas/crear', function () {
    return 'Crear nueva nota';
});

Route::get('notas/{id}/editar', function ($id) {
    return 'Editar nota: '.$id;
});

Route::get('/cursos', function () {
    return [
        'cursos'=> [
            'curso1' => 'Curso de Laravel',
            'curso2' => 'Curso de Vue.js',
            'curso3' => 'Curso de React'    
        ]

    ];
});
