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
Route::post('/usuario', [UsuarioController::class, 'store']);
Route::get('/carteira', [CarteiraController::class, 'index']);
Route::post('/carteira', [CarteiraController::class, 'store']);

Route::resource('/usuario', 'UsuarioController')->except([
    'show', 'edit'
]);

Route::resource('/carteira', 'CarteiraController')->except([
    'show', 'edit'
]);
Route::resource('/movement', 'MovementController')->except([
    'show', 'edit'
]);

//Delete
Route::get('/usuario/delete/{usuario}', function (App\Models\Usuario $usuario) {
    return view('usuarios.destroy', ['user' => $usuario]);
})->name('usuario.delete');

Route::get('/carteira/delete/{carteira}', function (App\Models\Carteira $carteira) {
    return view('carteiras.destroy', ['wallet' => $carteira]);
})->name('carteira.delete');

//Update


Route::get('/usuario/edit/{usuario}', function (App\Models\Usuario $usuario) {
    return view('usuarios.edit', ['user' => $usuario]);
})->name('usuario.edit');

Route::get('/carteira/movement/{carteira}', function (App\Models\Carteira $carteira) {
    return view('carteiras.movement', ['wallet' => $carteira]);
})->name('carteira.movement');

// Route::get('/carteira/movement/{carteira}', function (App\Models\Carteira $carteira) {
//     return view('carteiras.movement', ['wallet' => $carteira]);
// })->name('carteira.movement');








