<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GerechtcategorienController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('gerechtcategorien', [GerechtcategorienController::class, 'index']);
Route::get('add-gerechtcategorien', [GerechtcategorienController::class, 'create']);
Route::post('add-gerechtcategorien', [GerechtcategorienController::class, 'store']);
Route::get('edit-gerechtcategorien/{id}', [GerechtcategorienController::class, 'edit']);
Route::put('update-gerechtcategorien/{id}',[GerechtcategorienController::class, 'update']);
Route::get('delete-gerechtcategorien/{id}', [GerechtcategorienController::class, 'destroy']);
Route::delete('delete-gerechtcategorien/{id}', [GerechtcategorienController::class, 'destroy']);

