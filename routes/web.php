<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('detalle-vacante/{vacancy}', [PageController::class, 'vacancyDetails'])->name('vacancyDetails');

Route::view('editprofiledev', 'editprofiledev')->name('prueba');
Route::view('editprofilerec', 'editprofilerec')->name('pruebados');
Route::view('myprofiledev', 'myprofiledev')->name('pruebados');
Route::view('myprofilerec', 'myprofilerec')->name('pruebados');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
