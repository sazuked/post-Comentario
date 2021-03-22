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

Route::get('/cadastrar', function () {
    return view('welcome');
})->middleware('auth')->name('welcome');

Route::post('/cadastrar',[App\Http\Controllers\ControllerTela::class,'store'])->name('store_comentario');

Route::get('/',[App\Http\Controllers\ControllerTela::class,'show'])->name('listar');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/listarlog', [App\Http\Controllers\ControllerTela::class, 'listarLog'])->middleware('auth')->name('listarLog');
Route::get('/editarlog/{id}', [App\Http\Controllers\ControllerTela::class, 'editarLog'])->middleware('auth')->name('editarLog');
Route::get('/excluirlog/{id}', [App\Http\Controllers\ControllerTela::class, 'destroy'])->middleware('auth')->name('excluir');
Route::post('/update/{id}', [App\Http\Controllers\ControllerTela::class, 'update'])->middleware('auth')->name('updatecomet');