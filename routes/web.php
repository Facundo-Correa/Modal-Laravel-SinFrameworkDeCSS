<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/abrir-modal', function () {
    return view('modal');
})->name('abrir-modal');

Route::post('/cerrar-modal', function () {
    // Aquí puedes realizar cualquier acción necesaria antes de cerrar el modal
    return redirect('/');
})->name('cerrar-modal');