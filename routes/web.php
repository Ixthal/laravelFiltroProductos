<?php

use App\Http\Controllers\OtraPruebaController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo', function () {
    echo 'Hola';
});

Route::get('/', function () {
    return view('welcome');
});

// el /otra_prueba es lo que hay que escribir en la URL (8000/otra_prueba)
// me devuelve la vista de prueba.blade.php
Route::get('/otra_prueba', [OtraPruebaController::class, 'prueba2']);

Route::get('/users/{user_id}', [UsuariosController::class,'findUsersById']);

Route::get('/productos/new', [ProductosController::class,'insertarProductos']);
Route::get('/formulario', function(){
    return view('formulario');
});
Route::get('/filtro', function(){
    return view('filtro');
});