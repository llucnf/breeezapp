<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AutorController;
use App\Http\Controllers\PlatoController;

use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\GeneroController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
//Route::get('/',[LibroController::class,'inicio'])->middleware(['auth']);

Route::resource('libro',LibroController::class)->middleware(['auth']);
Route::resource('autor',AutorController::class)->middleware(['auth']);
Route::resource('genero',GeneroController::class)->middleware(['auth']);
Route::get('/',[PlatoController::class,'inicio'])->middleware(['auth']);
Route::resource('plato',PlatoController::class)->middleware(['auth']);
//Route::get('plato/{id}', 'PlatoController@showw')->name('plato.showw');
Route::resource('ingrediente',IngredienteController::class)->middleware(['auth']);
require __DIR__.'/auth.php';
