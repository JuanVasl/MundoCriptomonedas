<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ControllerCatalogoCriptomoneda;
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
    return view('auth.login');
})->name("home");

Auth::routes();

Route::get('/listar', [ControllerCatalogoCriptomoneda::class, 'index' ] )->name('cripto.index'); //Ruta para ver tabla criptomoneda
Route::get('/registrar',[ControllerCatalogoCriptomoneda::class, 'register'])->name('cripto.register');// Registro de criptomoneda
Route::post('/crear',[ControllerCatalogoCriptomoneda::class, 'store'])->name('cripto.create');//Guardar criptomonedas
Route::patch('/actualizarCripto/{criptoCoin}r',[ControllerCatalogoCriptomoneda::class, 'update'])->name('actualizarCripto');
Route::get('/editar/{criptoCoin}',  [ControllerCatalogoCriptomoneda::class, 'editar'])->name('editar');


Route::delete('deletecripto/{codigo_cripto}', [ControllerCatalogoCriptomoneda::class,'deletecripto'])->name('deletecripto');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ruta para el registro de cliente
Route::get('/Create/Cliente', [ClienteController::class, 'create'])->name('create');
Route::post('/Create/Save', [ClienteController::class, 'save'])->name('save');

//ruta para la vista del crud
Route::get('/read/Vista',  [ClienteController::class, 'read'])->name('read');

//ruta actualizar registro de clientes
Route::get('/edit/{cliente}',  [ClienteController::class, 'edit'])->name('edit');
Route::patch('/actualiza/{cliente}r',[ClienteController::class, 'update'])->name('actualizar');

//ruta para eliminar
Route::delete('delete/{cliente}', [ClienteController::class,'delete'])->name('delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/reglas', [ClienteController::class, 'reglas'])->name('reglas');
