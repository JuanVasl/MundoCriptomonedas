<?php

use App\Http\Controllers\ClienteController;
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
    return view('auth.login');
})->name("home");



Route::get( '/listar', [\App\Http\Controllers\ControllerCatalogoCriptomoneda::class, 'index' ] )->name('cripto.index');
Route::get('/registrar',[\App\Http\Controllers\ControllerCatalogoCriptomoneda::class, 'register'])->name('cripto.register');
Route::post('/crear',[\App\Http\Controllers\ControllerCatalogoCriptomoneda::class, 'store'])->name('cripto.create');
Route::get('/listar',  [ControllerCatalogoCriptomoneda::class, 'index'])->name('listar');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ruta para el registro de cliente
Route::get('/Create/Cliente', [ClienteController::class, 'create'])->name('create');
Route::post('/Create/Save', [ClienteController::class, 'save'])->name('save');

//ruta para la vista del crud
Route::get('/read/Vista',  [ClienteController::class, 'read'])->name('read');


