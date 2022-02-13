<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CarteiraController;

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
Route::get('/usuario', [UsuarioController::class, 'index']);
Route::get('/carteira', [CarteiraController::class, 'index']);

Route::resource('/carteira', 'CarteiraController')->except([
    'show', 'edit'
]);

Route::resource('/usuario', 'UsuarioController')->except([
    'show', 'edit'
]);





