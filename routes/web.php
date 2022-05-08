<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ControllerCatalogoCriptomoneda;

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
    return view('catalogo_cripto');
})->name("home");

Route::get('mostrar', function () {
    return view('ver_catalogo_cripto');
})->name("ver");

Route::get( '/listar', [\App\Http\Controllers\ControllerCatalogoCriptomoneda::class, 'index' ] )->name('cripto.index');
Route::get('/registrar',[\App\Http\Controllers\ControllerCatalogoCriptomoneda::class, 'register'])->name('cripto.register');
Route::post('/crear',[\App\Http\Controllers\ControllerCatalogoCriptomoneda::class, 'store'])->name('cripto.create');