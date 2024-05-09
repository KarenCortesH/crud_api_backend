<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Agregamos esto
Auth::routes();

Route::resource('clientes', 'ClienteController');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
