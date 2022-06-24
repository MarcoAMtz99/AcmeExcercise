<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperadorController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\HistorialController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//rutas base para operador
Route::resource('operador', OperadorController::class);
//rutas base para direcciones
Route::resource('direccion', DireccionController::class);
//rutas base para historial
Route::resource('historial', HistorialController::class);

//Ruta en donde se asignara la ruta para el operador
Route::post('/operador', [App\Http\Controllers\OperadorController::class,'asignar'])->name('operador.asignar');
Route::post('/operador/store', [App\Http\Controllers\OperadorController::class,'store'])->name('operador.store');
//Ruta home dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
