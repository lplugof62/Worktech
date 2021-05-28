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

Route::view('editprofiledev', 'edit-profiledev')->name('prueba');
Route::view('editprofilerec', 'edit-profilerec')->name('pruebados');
Route::view('myprofilerec', 'my-profilerec')->name('pruebados');
Route::view('myprofiledev', 'my-profiledev')->name('pruebados');
Route::view('createVac', 'vacancy-registration')->name('createVac');
Route::view('adminVac', 'vacancy-admin')->name('adminVac');
Route::view('candidates', 'candidates-vacancy')->name('candidates');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
