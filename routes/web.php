<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('usuarios')->group(function() {
    Route::get('', function() {
        return 'usuário';
    })->name ('usuarios');

    Route::get('/{id}', function() {
        return 'Mostrar detalhes';
    })->name('usuarios.show');

    Route::get('/{id}/tags', function() {
        return 'Tags do usuário';
    })->name('usuarios.tag');
});

Route::get('/a-empresa/{string}', function ($string) {
    return $string;
})->name('a-empresa');

Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . ' - ' . $paramB;
});
