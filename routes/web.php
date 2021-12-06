<?php

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
        return view ('cliente/index');
});

///Rotas Imoveis

Route::get('imoveis/remove/{id}', 'ImovelController@remover')->name('imoveis.remove');
Route::resource('imoveis', ImovelController::class);

///Rotas Clientes
Route::get('cliente/remove/{id}', 'ClienteController@remover')->name('cliente.remove');
Route::resource('cliente', ClienteController::class);

//-----------------------------------//
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

