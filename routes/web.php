<?php

use App\Http\Controllers\Backend\CreateVacancyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\VacancyController;

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

// Route::resource('adminVac', CreateVacancyController::class);
Route::resource('vacancy', VacancyController::class)->middleware('auth');

Route::view('editprofiledev', 'edit-profiledev')->name('prueba');
Route::view('editprofilerec', 'edit-profilerec')->name('pruebados');
Route::view('mi-perfil-rec', 'my-profilerec')->name('my-profilerec');
Route::view('mi-perfil-dev', 'my-profiledev')->name('my-profiledev');
Route::view('createVac', 'vacancy-registration')->name('createVac');
Route::view('candidates', 'candidates-vacancy')->name('candidates');
Route::view('contacto', 'contact')->name('contact');



Route::middleware(['auth:sanctum', 'verified'])->get('/mi-cuenta', function () {
    return view('dashboard');
})->name('dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->get('/index', function () {
//     return view('index');
// })->name('index');
// Route::middleware(['auth:sanctum', 'verified'])->get('/adminVac', function () {
//     return view('vacancy-admin');
// })->name('adminVac');
