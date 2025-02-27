<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePage\HomeController;

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


/* HOME */

Route::get('/', function () {
    return view('Home.HomePage');
})->name('home');

Route::get('somos', [HomeController::class, 'Somos'])->name('home.somos');

Route::get('registro', [HomeController::class, 'Registro'])->name('home.registro');
Route::get('uso', [HomeController::class, 'Terminos'])->name('home.uso');
Route::get('privacidad', [HomeController::class, 'Privacidad'])->name('home.privacidad');

/*ADMIN DASHBOARD */

